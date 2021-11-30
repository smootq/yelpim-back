var lowerSlider = document.querySelector('#lower');
var  upperSlider = document.querySelector('#upper');

document.querySelector('#two').value=upperSlider.value;
document.querySelector('#one').value=lowerSlider.value;

var  lowerVal = parseInt(lowerSlider.value);
var upperVal = parseInt(upperSlider.value);

upperSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    if (upperVal < lowerVal + 4) {
        lowerSlider.value = upperVal - 4;
        if (lowerVal == lowerSlider.min) {
        upperSlider.value = 4;
        }
    }
    document.querySelector('#two').value=this.value
};

lowerSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);
    if (lowerVal > upperVal - 4) {
        upperSlider.value = lowerVal + 4;
        if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
        }
    }
    document.querySelector('#one').value=this.value
};

/*------------------------------*/
var lowerSlider1 = document.querySelector('#lower1');
var  upperSlider1 = document.querySelector('#upper1');

document.querySelector('#two1').value=upperSlider1.value;
document.querySelector('#one1').value=lowerSlider1.value;

var  lowerVal1 = parseInt(lowerSlider1.value);
var upperVal1 = parseInt(upperSlider1.value);

upperSlider1.oninput = function () {
    lowerVal1 = parseInt(lowerSlider1.value);
    upperVal1 = parseInt(upperSlider1.value);

    if (upperVal1 < lowerVal1 + 4) {
        lowerSlider1.value = upperVal1 - 4;
        if (lowerVal1 == lowerSlider1.min) {
        upperSlider1.value = 4;
        }
    }
    document.querySelector('#two1').value=this.value
};

lowerSlider1.oninput = function () {
    lowerVal1 = parseInt(lowerSlider1.value);
    upperVal1 = parseInt(upperSlider1.value);
    if (lowerVal1 > upperVal1 - 4) {
        upperSlider1.value = lowerVal1 + 4;
        if (upperVal1 == upperSlider1.max) {
            lowerSlider1.value = parseInt(upperSlider1.max) - 4;
        }
    }
    document.querySelector('#one1').value=this.value
}; 