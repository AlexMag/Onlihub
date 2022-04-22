class Likes{

    constructor() {

        this.init()
    }

    init(){

        let els = document.querySelectorAll(".likes");

        els.forEach(el => {

            //console.log(el)

            el.addEventListener('click', (e) => {
                //e.currentTarget.classList.toggle('active'); // works correctly

                let id = e.target.getAttribute('data-id')
                this.send(id)
                this.changeDigit(id)
            });
        });
    }

    // Ajax call
    send(id){

        let elements = document.getElementsByClassName("formVal");
        let formData = new FormData();
        formData.append('id', id);

        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open("post", "/like");
        xmlHttp.setRequestHeader('x-csrf-token', document.querySelector("meta[name='csrf-token']").content)
        xmlHttp.send(formData);
    }

    changeDigit(id){

        let element = document.getElementById('likes_' + id)

        //console.log(element)
        element.innerHTML = (parseInt(element.textContent) + 1)
    }
}

new Likes()
