<div class="product-360-wrapper">
    <div class="product-360-view">
        <img id="productFrame" src="gallery1.png">
    </div>

    <div class="dot-navigation">
        <span class="dot active" onclick="changeFrame(0)"></span>
        <span class="dot" onclick="changeFrame(1)"></span>
        <span class="dot" onclick="changeFrame(2)"></span>
        <span class="dot" onclick="changeFrame(3)"></span>
        <span class="dot" onclick="changeFrame(4)"></span>
        <span class="dot" onclick="changeFrame(5)"></span>
        <span class="dot" onclick="changeFrame(6)"></span>
        <span class="dot" onclick="changeFrame(7)"></span>
    </div>
</div>

<style>
.product-360-wrapper{
    text-align:center;
    width:100%;
    max-width:850px;
    margin:0 auto;
}

.product-360-view{
    width:100%;
    position:relative;
}

.product-360-view img{
    width:100%;
    height:auto;
    user-select:none;
    pointer-events:none;
}

.dot-navigation{
    margin-top:15px;
    display:flex;
    justify-content:center;
    gap:12px;
}

.dot{
    width:12px;
    height:12px;
    background:#ccc;
    border-radius:50%;
    cursor:pointer;
    transition:0.3s;
}

.dot.active{
    background:#0077be; /* Bajaj Blue */
    transform:scale(1.2);
}
</style>

<script>
let frames = [
    "gallery1.png",
    "gallery2.png",
    "gallery3.png",
    "gallery4.png",
    "gallery5.png",
    "gallery6.png",
    "gallery7.png",
    "gallery8.png"
];

let currentFrame = 0;
let img = document.getElementById("productFrame");
let dots = document.querySelectorAll(".dot");

// Preload images
frames.forEach(src => {
    let preloadImg = new Image();
    preloadImg.src = src;
});

// Change frame manually (dot click)
function changeFrame(i){
    currentFrame = i;
    img.src = frames[i];

    dots.forEach(d => d.classList.remove("active"));
    dots[i].classList.add("active");
}

// Drag rotation
let startX = 0;
let isDragging = false;

document.querySelector(".product-360-view").addEventListener("mousedown", e => {
    isDragging = true;
    startX = e.clientX;
});

document.addEventListener("mouseup", () => {
    isDragging = false;
});

document.addEventListener("mousemove", e => {
    if(!isDragging) return;

    let diff = e.clientX - startX;

    if(Math.abs(diff) > 15){
        if(diff > 0){
            currentFrame = (currentFrame + 1) % frames.length;
        } else {
            currentFrame = (currentFrame - 1 + frames.length) % frames.length;
        }
        changeFrame(currentFrame);
        startX = e.clientX;
    }
});
</script>
