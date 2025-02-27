<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección de Comentarios</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;            background-color: #0ea4d1;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .comentarios-container {
            width: 50%;
            margin: 20px auto;
            background: #0ea4d1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            color: #07344a;
        }

        #comentario-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #comentario-texto {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #424242;
            border-radius: 5px;
            font-size: 14px;
            resize: none;
            background:  #7cddfd;
            color: #07344a;
        }

        button {
            background: blue;
            color: #07344a;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
            font-weight: 600;
        }

        button:hover {
            background:#7cddfd;
            color: #fff;
        }

        #comentarios-lista {
            margin-top: 20px;
        }

        .comentario {
            background: #7cddfd;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            border-left: 5px solid #0a0262;
            font-size: 14px;
            color: #07344a;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .comentario strong {
            color: #351d15;
            font-size: 12px;
        }

        .comentario::before {
            content: "\1F464";
            font-size: 24px;
            color: #351d15;
        }
    </style>
</head>
<body>
<section id="comments">
    <div class="comentarios-container">
        <h2>Comentarios</h2>
        <form id="comentario-form">
            <textarea id="comentario-texto" placeholder="Escribe tu comentario..." required></textarea>
            <button type="submit">Publicar</button>
        </form>
        <div id="comentarios-lista">
            <div class="comentario">Excelente página, muy útil. - <strong>liLy Rodriguez</strong></div>
            <div class="comentario">Me encantó el diseño. - <strong>María López</strong></div>
            <div class="comentario">Sería genial agregar más contenido. - <strong>Angel Gómez</strong></div>
        </div>
    </div>

    <script>
        document.getElementById("comentario-form").addEventListener("submit", function(event) {
            event.preventDefault();
            let texto = document.getElementById("comentario-texto").value;
            if (texto.trim() !== "") {
                let nuevoComentario = document.createElement("div");
                nuevoComentario.classList.add("comentario");
                nuevoComentario.innerHTML = `${texto} - <strong>Anónimo</strong>`;
                document.getElementById("comentarios-lista").appendChild(nuevoComentario);
                document.getElementById("comentario-texto").value = "";
            }
        });
    </script>
</section>
</body>
</html>
