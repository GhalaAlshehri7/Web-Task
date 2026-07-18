document.getElementById("userForm").addEventListener("submit", function(e){

    e.preventDefault();

    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;

    fetch("add.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `name=${encodeURIComponent(name)}&age=${encodeURIComponent(age)}`
    })
    .then(response => response.text())
    .then(data => {

        if(data.trim() === "success"){
            alert("Saved Successfully");
            location.reload();
        }else{
            alert("Error: " + data);
        }

    })
    .catch(error => {
        alert("Error: " + error);
    });

});

function toggleStatus(id){

    fetch("toggle.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:`id=${id}`
    })

    .then(response=>response.text())

    .then(data=>{

        location.reload();

    });

}
