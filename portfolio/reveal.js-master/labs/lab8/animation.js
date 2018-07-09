var counter = 0;

function start()
{
    counter++;
    if (counter%2==0) 
    {
    	document.getElementById('d').src = 'black.png';
    }
    else
    {
    	document.getElementById('d').src = 'yellow.png';
    }
}

setInterval(start , 1000);

window.addEventListener("load" , start , false);