<div class="fixed inset-0 {{--pointer-events-none--}} -z-10">
    <div id="background-container" class="absolute inset-0 {{--blur-lg--}} overflow-hidden">
    </div>
    <div class="backdrop-blur absolute inset-0 opacity-50"
        style="background: linear-gradient(45deg, rgb(0 0 0) 0%, rgb(42 34 111) 100%);"
    ></div>
</div>
<script>
    const sizes = [2, 4, 8, 16, 32, 16];
    const directions = ['l2r', 'r2l'];
    const container = document.getElementById('background-container');

    sizes.forEach((size, i) => {
        const div = document.createElement('div');
        const delay = Math.floor(Math.random() * 30);
        const speed = Math.floor(Math.random() * 20) + 20;
        const dir = directions[Math.floor(Math.random() * 2)];
        const y = ((90 / sizes.length) * i) + 5;
        const color = '#' + (Math.floor(Math.random() * 16)).toString(16).repeat(3);

        div.classList.add('absolute', `w-${size}`, `h-${size}`, 'opacity-20');
        div.style[dir === 'l2r' ? 'left' : 'right'] = '-50vw';
        div.style.top = `${y}vh`;
        div.style.animation = `${dir} ${speed}s linear ${delay}s infinite`;
        div.style.backgroundColor = color;

        container.appendChild(div);
    });

</script>
