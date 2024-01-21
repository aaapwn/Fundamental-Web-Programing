var scroll = document.getElementById('display')

const calculate = () => {
    const val1 = parseInt(document.getElementById('val1').value);
    const val2 = parseInt(document.getElementById('val2').value);;
    const result = document.getElementById('result');
    result.innerHTML = val1 + val2;
    
    const display = document.getElementById('display');
    let p = document.createElement('p');
    p.innerHTML = `${new Date().toLocaleString()} | ${val1} + ${val2} = ${val1 + val2}`;
    display.appendChild(p);
    
    document.getElementById('val1').value = '';
    document.getElementById('val2').value = '';

    scroll.scrollTop = scroll.scrollHeight;
}
