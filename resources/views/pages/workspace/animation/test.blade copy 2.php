<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section with Moving Web Dev Tools</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-color: #111;
        }

        .hero {
            position: relative;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .icon-box {
            position: absolute;
            width: var(--size, 80px);
            height: var(--size, 80px);
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.2s ease-out;
        }

        .icon {
            font-size: calc(var(--size, 80px) / 2);
            color: white;
        }
    </style>
</head>

<body>
    <div class="hero" id="hero">
        <div class="floating-icons" id="icons">
            <!-- Icons and boxes will be dynamically added via JavaScript -->
        </div>
    </div>
    <script>
        const iconsContainer = document.getElementById('icons');
        const tools = [
            'bi-filetype-js', 'bi-filetype-ts', 'bi-filetype-py', 'bi-filetype-go', 'bi-filetype-java',
            'bi-filetype-swift', 'bi-filetype-cs', 'bi-gem', 'bi-database', 'bi-code-slash'
        ];

        tools.forEach((tool, index) => {
            const size = 40 + Math.random() * 60;
            const box = document.createElement('div');
            box.classList.add('icon-box');
            box.style.setProperty('--size', `${size}px`);
            box.style.top = `${Math.random() * 100}vh`;
            box.style.left = `${Math.random() * 100}vw`;

            const icon = document.createElement('i');
            icon.classList.add('icon', tool);

            box.appendChild(icon);
            iconsContainer.appendChild(box);
        });

        document.addEventListener('mousemove', (e) => {
            const {
                clientX: x,
                clientY: y
            } = e;
            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;
            const offsetX = (x - centerX) / centerX;
            const offsetY = (y - centerY) / centerY;

            document.querySelectorAll('.icon-box').forEach(box => {
                box.style.transform = `translate(${offsetX * -20}px, ${offsetY * -20}px)`;
            });
        });
    </script>
</body>

</html>