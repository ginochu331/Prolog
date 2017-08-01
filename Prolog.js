let barPosition = $('#select-bar').offset();
let barWidth = document.getElementById('select-bar').offsetWidth;
let barHeight = document.getElementById('select-bar').offsetHeight;

// sticker bar
$(window).scroll(function(){
    if($(window).scrollTop() > barPosition.top){
        $('#fixed-bar').css('display','block').css('width',barWidth);
        $('#select-bar').css('visibility','hidden');
    } else {
        $('#fixed-bar').css('display','none');
        $('#select-bar').css('visibility','visible');
    }    
});

let bookbtn = document.getElementById('book-btn');
bookbtn.addEventListener('click', (event) => {
	
})