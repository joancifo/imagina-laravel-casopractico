     Nos gustaría que la explicación de estos casos tuviese un enfoque eminentemente práctico, con la realización de ejemplos concretos por parte del alumnado. Este caso práctico consistiría en:

    Crear un sistema que permita crear cursos
        Un curso puede tener varios docentes
        Disponer de una tabla dinámica (datatable) con el listado de cursos creados
        Que el listado de cursos disponga de unos filtros para acotar los resultados que se muestran (fecha de inicio del curso, fecha de fin del curso, etc,)
        Disponer de un botón para crear un nuevo curso con los datos básicos
        Acceder a un formulario para la edición de un curso concreto, en el formulario se deberán añadir, al menos, 2 docentes mostrando el formulario que añade docentes (nombre y apellidos) en una ventana modal
		
    Crear un sistema que permita a personas inscribirse en cursos
        Una persona puede matricularse en varios cursos, accediendo desde un listado de cursos al detalle del curso de interés
        En el proceso de matriculación de las personas a cada curso deben cumplimentar un formulario al que deben adjuntar cierta documentación
		
    Desarrollar un interfaz de gestión que permita:
        Mostrar 2 tablas “maestro-detalle”, que en la tabla superior aparezcan todos los cursos y al seleccionar un curso en particular, en la tabla inferior se muestren sólo los alumnos matriculados al mismo
        Que se pueda entrar en el detalle del alumno y ver un listado de los cursos a los que se haya matriculado
        Que se pueda ver, borrar o modificar la documentación que el alumno haya subido en cada matriculación
        Que se puedan modificar datos del alumno y de su estado en el curso (ACEPTADO/DESCARTADO/PENDIENTE)
        Posibilidades de exportación a Excel desde los diferentes listados
        Generación de una ficha de inscripción en PDF para cada matrícula
		
    Tendremos tres perfiles de usuarios autenticados (a modo de información, ahora mismo nosotros estamos utilizando el plugin LARAVEL-PERMISSION):
        Alumno: sólo accede a su ficha y a los cursos en los que se ha matriculado, puede modificar su información personal
        Docente: sólo accede a la información de los cursos que tiene asignados y a los alumnos ACEPTADOS, no puede modificar ningún dato
        Gestor: accede a toda la información y puede modificar todos los datos




c0_test
iE8rP!4LVBfwu
c4_test
