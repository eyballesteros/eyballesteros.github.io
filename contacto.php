<?php include("template/cabecera.php");?>
<div class="Contenedor">

    <div class="formularioContacto">

        <h1 class="titulo">Formulario de contacto</h1>
        <h2 class="subtitulo">Escríbenos y en breve los pondremos en contacto contigo</h2>

        <form action="correo/enviar" class="form" method="post">
            <p>
                <label for="nombre" class="nombre">Nombre
                    <span class="obligatorio">*</span>
                </label>
                <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
            </p>
            <p>
                <label for="email" class="email">Email
                    <span class="obligatorio">*</span>
                </label>
                <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
            </p>
            <p>
                <label for="telefone" class="telefono">Teléfono
                </label>
                <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
            </p>
            <p>
                <label for="asunto" class="asunto">Asunto
                    <span class="obligatorio">*</span>
                </label>
                <input type="text" name="asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
            </p>
            <p>
                <label for="mensaje" class="mensaje">Mensaje
                    <span class="obligatorio">*</span>
                </label>
                <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
            </p>
            <button type="submit" name="enviar" id="enviar"><p>Enviar</p></button>
            <p class="aviso">
                <span class="obligatorio"> * </span>los campos son obligatorios.
            </p>
        </form>
    </div>

</div>

<?php include("template/pie.php");?>