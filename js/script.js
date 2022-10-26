var ranger = document.getElementById('ranger'),
    image =  document.getElementById('image'),
    width = image.width,
    height = image.height;

ranger.onchange = function(){
    image.width = width * (ranger.value / 100);
    image.height = height * (ranger.value / 100);
}
