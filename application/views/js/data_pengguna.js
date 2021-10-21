var userObject = {createdAt:"",id:"",email:"",password:"",birthdate:""};

function getUserList() {

$.ajax({
    url: "https://reqres.in/api/users",
    type: "POST",
    data: {
        email: "nadia@rumahweb.co.id",
        password: "nadia",
        birthdate: "16-09-1999"
    },
    success: function(response){
        userObject = response;
        console.log(userObject.createdAt+" "+ userObject.id);
    }
});
}