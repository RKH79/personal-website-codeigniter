let Ralert=document.getElementById("Ralert");""!=Ralert.innerText&&(Ralert.style.display="block",Ralert.classList.add("fadeInRight"),setTimeout(function(){Ralert.classList.remove("fadeInRight"),Ralert.classList.add("fadeOutRight")},5e3)),Galert=document.getElementById("Galert"),""!=Galert.innerText&&(Galert.style.display="block",Galert.classList.add("fadeInRight"),setTimeout(function(){Galert.classList.remove("fadeInRight"),Galert.classList.add("fadeOutRight")},5e3));
let imageurl = document.getElementById("imageurl");
if (imageurl!=null) {
    imageurl.onchange = function() {
        let formData = new FormData();
        formData.append('file-select', imageurl.files[0]);
        formData.append('action', "imageUpload");
        let imageAjax = new XMLHttpRequest();
        imageAjax.open('POST', 'projectImageManage', true);
        imageAjax.send(formData);
        imageAjax.onload = function () {
            if (imageAjax.status === 200) {
                console.log(imageAjax.response);
                document.getElementById("images").innerHTML += '<img class="projectImage" src="assets/images/sliderImage/'+imageAjax.response+'" width="250px" height="150px" />';
            }
        };
    }
}