let userData = []

const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const saveForm = () => {
    let alertMessage = [
        `<p>เกิดข้อผิดพลาด</p>`,
        `<ul style='margin-left: 20px;'>`,
    ]
    let alertType = 'success'
    const result = document.forms["myForm"]
    if (result["idCard"].value.toString().length !== 13) {
        alertMessage.push('<li>กรุณากรอกเลขบัตรประชาชนให้ครบ 13 หลัก</li>')
        alertType = 'danger'
    } if (result["prefix"].value === '') {
        alertMessage.push('<li>กรุณาเลือกคำนำหน้าชื่อ</li>')
        alertType = 'danger'
    } if (result["firstName"].value.length >= 20 && result["firstName"].value.length <= 2) {
        alertMessage.push('<li>ชื่อต้องมีความยาว 2-20 ตัวอักษร</li>')
        alertType = 'danger'
    } if (result["lastName"].value.length >= 30 && result["lastName"].value.length <= 2) {
        alertMessage.push('<li>นามสกุลต้องมีความยาว 2-30 ตัวอักษร</li>')
        alertType = 'danger'
    } if (result["address"].value.length <= 15) {
        alertMessage.push('<li>ที่อยู่ต้องมีความยาวมากกว่า 15 ตัวอักษร</li>')
        alertType = 'danger'
    } if (result["subDistrict"].value.length <= 2) {
        alertMessage.push('<li>ตำบล/แขวงต้องมีความยาวมากกว่า 2 ตัวอักษร</li>')
        alertType = 'danger'
    } if (result["district"].value.length <= 2) {
        alertMessage.push('<li>อำเภอ/เขตต้องมีความยาวมากกว่า 2 ตัวอักษร</li>')
        alertType = 'danger'
    } if (result["province"].value === '') {
        alertMessage.push('<li>กรุณาเลือกจังหวัด</li>')
        alertType = 'danger'
    } if (result["postalCode"].value.toString().length !== 5) {
        alertMessage.push('<li>รหัสไปรษณีย์ต้องมีความยาว 5 ตัวอักษร</li>')
        alertType = 'danger'
    }
    alertMessage.push('</ul>')
    if (alertType === 'success') {
        alertMessage = ['<p>บันทึกข้อมูลสำเร็จ!</p>']
        const data = {
            idCard: result["idCard"].value,
            prefix: result["prefix"].value,
            firstName: result["firstName"].value,
            lastName: result["lastName"].value,
            address: result["address"].value,
            subDistrict: result["subDistrict"].value,
            district: result["district"].value,
            province: result["province"].value,
            postalCode: result["postalCode"].value,
        }
        userData.push(data)
        localStorage.setItem('data', JSON.stringify(userData))
        loadData()
    }
    appendAlert(alertMessage.join(''), alertType)
}

const loadData = () => {
    userData = JSON.parse(localStorage.getItem('data'))
    const table = document.getElementById('table-body')
    table.innerHTML = ''
    userData.map((item) => {
        const row = table.insertRow()
        row.insertCell().innerHTML = item.idCard
        row.insertCell().innerHTML = item.prefix
        row.insertCell().innerHTML = item.firstName
        row.insertCell().innerHTML = item.lastName
        row.insertCell().innerHTML = `${item.address}, ${item.subDistrict} ${item.district} ${item.province} ${item.postalCode}`
    })
}
