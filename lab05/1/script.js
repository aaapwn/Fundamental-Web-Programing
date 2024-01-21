const showData = async () => {
    const response = await fetch('./employee.json');
    const data = await response.json();
    
    let html = '';

    data.forEach((element) => {
        html += `<p>${element.id}. <b>${element.firstname} ${element.lastname}</b> (${element.gender}) is a ${element.position}, ${element.address}</p>`;
    });

    document.getElementById('data').innerHTML = html;
};
showData()