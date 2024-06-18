


const message = `WorkCreed is a platform for college going students where they can work on real life projects and earn money and experience while doing it. So what are you waiting for??`;


// Want to use this in your own code? Just copy and paste everything here, but change the value of the "container" variable (currently '#target') to match your chosen target DOM element.
// Also be sure the target element has the right white-space CSS in your code.
const container = document.querySelector('#trgt');




let n;

function rerun(){
  container.textContent = '';
  n = 0;
  typist(message, container);
};

rerun();

function interval(letter){
  console.log(letter);
  if(letter == ';' || letter == '.' || letter == ','){
    return Math.floor((Math.random() * 500) + 500);
  } else {
    return Math.floor((Math.random() * 130) + 5);
  }
}

function typist(text, trgt){
  if(typeof(text[n]) != 'undefined'){
    trgt.textContent += text[n];
  }
  n++;
  if(n < text.length){
    setTimeout(function(){
      typist(text, trgt)
    }, interval(text[n - 1]));
  } 
}