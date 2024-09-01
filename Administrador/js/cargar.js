const firebaseConfig = {

};

firebase.initializeApp(firebaseConfig);

let fileInp = document.querySelector("#fileInp")
let fileText = document.querySelector(".fileText")
let uploadPercentage = document.querySelector(".uploadPercentage")
let progress = document.querySelector(".progress")
let img = document.querySelector("#img")
// 

let contener = document.getElementById('url')

let fileName
let fileItem
function getFile(e) {
    fileItem = e.target.files[0]
    fileName = fileItem.name
    fileText.innerHTML = fileName
}

function cargandoImg() {

    const storageRef = firebase.storage().ref("images/" + fileName)
    const uploadTask = storageRef.put(fileItem)

    uploadTask.on(
        "state_changed",
        (snapshot) => {
            console.log(snapshot);
            const percenVal = Math.floor(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100)
            console.log(percenVal);

            uploadPercentage.innerHTML = percenVal + "%"
            progress.style.width = percenVal + "%"

        }, (error) => {
            console.log("Error is", error);
        },
        () => {

            uploadTask.snapshot.ref.getDownloadURL().then((url) => {
                console.log("URL", url);

                if (url !== "") {



                    img.setAttribute("src", url)
                    contener.textContent = url
                    // Aguantar en el nav
                    localStorage.setItem("imagenURL", url)

                }

            });

        }

    );

}

window.addEventListener("load", () => {
    const storedURL = localStorage.getItem("imagenURL")

    if (storedURL) {


        img.setAttribute("src", storedURL)
        contener.textContent = storedURL
    }
})

fileInp.addEventListener("change", getFile);




