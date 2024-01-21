const allCountry = [
    {
        value: '',
        eng: 'Select Country',
        thai: 'เลือกประเทศ'
    },
    {
        value: 'thailand',
        eng: 'Thailand',
        thai: 'ไทย'
    },
    {
        value: 'vietnam',
        eng: 'Vietnam',
        thai: 'เวียดนาม'
    },
    {
        value: 'laos',
        eng: 'Laos',
        thai: 'ลาว'
    },
    {
        value: 'malaysia',
        eng: 'Malaysia',
        thai: 'มาเลเซีย'
    },
    {
        value: 'singapore',
        eng: 'Singapore',
        thai: 'สิงคโปร์'
    },
    {
        value: 'philippines',
        eng: 'Philippines',
        thai: 'ฟิลิปปินส์'
    },
    {
        value: 'myanmar',
        eng: 'Myanmar',
        thai: 'พม่า'
    },
    {
        value: 'cambodia',
        eng: 'Cambodia',
        thai: 'กัมพูชา'
    },
    {
        value: 'brunai',
        eng: 'Brunai',
        thai: 'บรูไน'
    }
]


let lang = 'th'

const onChangeLanguage = () => {
    lang = lang === 'th' ? 'en' : 'th'
    document.getElementById('firstname').placeholder = lang === 'th' ? 'ชื่อ' : 'First Name'
    document.getElementById('lastname').placeholder = lang === 'th' ? 'นามสกุล' : 'Last Name'
    const country = document.getElementById('country')
    country.innerHTML = ''
    allCountry.forEach((item) => {
        const option = document.createElement('option')
        option.value = item.value
        option.innerHTML = lang === 'th' ? item.thai : item.eng
        country.appendChild(option)
    })
    document.getElementById('change').innerHTML = lang === 'th' ? 'เปลี่ยนภาษาเป็นอังกฤษ' : 'Change Language to Thai'
}
