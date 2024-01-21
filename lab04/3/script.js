let countData = 0
const scroll = document.getElementsByClassName('show-data')[0];

const register = () => {
    countData++;
    const data = [
        document.getElementById('stdId').value,
        document.getElementById('firstname').value,
        document.getElementById('lastname').value,
    ]
    const table = document.getElementById('show-data');
    const row = table.insertRow(-1);

    let cell;
    cell = row.insertCell(-1);
    cell.innerHTML = countData;

    data.forEach((item) => {
        cell = row.insertCell(-1);
        cell.innerHTML = item;
    })

    document.getElementById('stdId').value = '';
    document.getElementById('firstname').value = '';
    document.getElementById('lastname').value = '';
    
    scroll.scrollTop = scroll.scrollHeight;
}
