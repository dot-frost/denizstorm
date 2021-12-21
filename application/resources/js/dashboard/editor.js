import icons from 'trumbowyg/dist/ui/icons.svg'
import 'trumbowyg'

(()=>{
    fetch(icons).then(async r => {
        let svg = await r.text()
        document.body.innerHTML += `<div id="trumbowyg-icons">${svg}</div>`
    })  
})()