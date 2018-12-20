(function(){
  let textcounter = 0;
  let rainbowClass = document.getElementsByClassName('rainbow');
  let lengtharray = []; //Remembers the length of the content with class=rainbow so for loop doesnt change color of undefined
  let rainbowarray = []; //Becomes the final array containing all the <span>'d text
  let finalarray = []; //Becomes the final array referencing the spanned text and changing the color
  let a = 0;

  for(let i = 0; i < rainbowClass.length; i++)
  {
    let tempvar = rainbowClass[i].innerText.split("");
    lengtharray[i] = tempvar.length;
    rainbowarray.push(rainbowClass[i].innerText.split(""));
    console.log(rainbowarray[i]);
  }

  for(let i = 0; i < rainbowarray.length; i++)
  {
    rainbowClass[i].innerHTML = rainbowarray[i].map(function(char) {
      return '<span>' + char + '</span>';
    }).join('');
    finalarray[i] = rainbowClass[i].children;
    console.log(finalarray[i]);
  }

  for(let i = 0; i < rainbowClass.length; i++)
  {
    rainbowcolors(i, finalarray[i].length)
  }

  function rainbowcolors(a,b)
  {
    setInterval(function colorchange() {
      for (let i = 0; i < b; i++)
      {
        finalarray[a][i].style.color = 'hsl(' + (textcounter + Math.floor(i * 3)) + ', 100%, 70%';
      }
      textcounter++;
    }, 7);
  }

  let backgroundcounter = 0;
  let rainbowId = document.getElementsByClassName('rainbowbackground');


    setInterval(function colorchange() {
	for(let i = 0; i < rainbowId.length; i++)
	{
	   rainbowId[i].style.backgroundColor = 'hsl(' + (backgroundcounter + Math.floor(i * -1)) + ', 100%, 70%';
	}
      backgroundcounter++;
    }, 90);

})()
