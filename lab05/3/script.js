const showData = async () => {
    const response = await fetch('./questionAnswer.json');
    const data = await response.json();
    
    let html = '';

    data.forEach((element, index) => {
        html += `<div>`
        html += `<p>${index+1}. ${element.question}</p>`;
        
        html += `<div class="form-check">`;
        html += `<input class="form-check-input" type="radio" name="${index}" value="a">`;
        html += `<label class="form-check-label">${element.answers.a}</label>`;
        html += `</div>`;

        html += `<div class="form-check">`;
        html += `<input class="form-check-input" type="radio" name="${index}" value="b">`;
        html += `<label class="form-check-label">${element.answers.b}</label>`;
        html += `</div>`;

        html += `<div class="form-check">`;
        html += `<input class="form-check-input" type="radio" name="${index}" value="c">`;
        html += `<label class="form-check-label">${element.answers.c}</label>`;
        html += `</div>`;
        html += `</div>`;
    });

    document.getElementById('data').innerHTML = html;
};

showData()
