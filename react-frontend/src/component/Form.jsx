import { useState } from "react";

function Form(){
    const [name, setName] = useState("");
    const handleSubmit = (e) => {
        e.preventDefault();
        console.log ("Submitted Name: ", name)
    }
    return(
    <>
    <form methos="POST" onSubmit={handleSubmit}>
        <input
        type = "text"
        value = {name}
        onChange={(e) => setName(e.target.value)}
        placeholder = "Enter your name"
        />
 
        <button type="sumbit">submit</button>
    </form>
    </>
    );
   
}