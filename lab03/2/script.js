const number = [1, 2, 4, 3]
const onClickHandler = () => {
    const temp = number[3]
    number.unshift(temp)
    number.pop()
    number.forEach((item, index) => {
        document.getElementById(`pos${index}`).src = `http://10.0.15.21/lab/lab3/images/${item}.png`
    })
}
