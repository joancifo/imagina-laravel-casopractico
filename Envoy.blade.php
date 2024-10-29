@servers(['web' => 'root@imagina.fona.dev'])

@setup
    $repository = 'git@gitlab.com:joancifo/caso-practico.git';
    $releases_dir = '/var/www/imagina.fona.dev/tmp';
    $app_dir = '/var/www/imagina.fona.dev/web';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup

@story('deploy')
    clone_repository
    run_composer
    update_symlinks
@endstory

@task('clone_repository')
    echo 'Cloning repository'
    [ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
    git clone --depth 1 {{ $repository }} {{ $new_release_dir }}
    cd {{ $new_release_dir }}
    git reset --hard {{ $commit }}
@endtask

@task('run_composer')
    echo "Starting deployment ({{ $release }})"
    cd {{ $new_release_dir }}
    php8.3 /usr/local/bin/composer install --prefer-dist --no-scripts -q -o
@endtask

@task('update_symlinks')
    echo "Linking storage directory"
    rm -rf {{ $new_release_dir }}/storage
    ln -nfs {{ $app_dir }}/storage {{ $new_release_dir }}/storage

    echo "Linking database.sqlite"
    rm -rf {{ $new_release_dir }}/database/database.sqlite
    ln -nfs {{ $app_dir }}/database.sqlite {{ $new_release_dir }}/database/database.sqlite

    echo 'Linking .env file'
    ln -nfs {{ $app_dir }}/.env {{ $new_release_dir }}/.env

    echo 'Linking current release'
    ln -nfs {{ $new_release_dir }}/public {{ $app_dir }}/public
@endtask

@task('migrations')
    cd {{ $app_dir }}/current
    php8.3 artisan migrate


@endtask
