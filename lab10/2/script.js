const nextQuestion = (qid) => {
    if (!localStorage.getItem('answers')) {
        localStorage.setItem('answers', JSON.stringify(new Array(10).fill('')));
    }
    const answers = JSON.parse(localStorage.getItem('answers'));
    answers[qid-1] = document.querySelector('input[name="choice"]:checked').value;
    localStorage.setItem('answers', JSON.stringify(answers));

    window.location.href = `./?id=${qid+1}`;
}

const submit = () => {
    const answers = JSON.parse(localStorage.getItem('answers'));
    answers[9] = document.querySelector('input[name="choice"]:checked').value;
    
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'submit.php';

    answers.forEach((answer, i) => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = `q${i+1}`;
        input.value = answer;
        form.appendChild(input);
    });

    document.body.appendChild(form);
    form.submit();
}
