const showData = async () => {
    const response = await fetch('./person.json');
    const data = await response.json();
    
    let html = '';

    data.forEach((element) => {
        html += `<p><b>${element.firstName} ${element.lastName}</b> (${element.gender.type}) ${element.age} years old.<br>${element.address.streetAddress} ${element.address.city} ${element.address.state} <br>${element.address.postalCode}</p>`;
        element.phoneNumber.forEach((phone) => {
            html += `<p>${phone.type} : ${phone.number}</p>`;
        })
    });

    document.getElementById('data').innerHTML = html;
};

showData()
