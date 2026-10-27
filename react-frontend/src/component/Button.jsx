
function Button() {

  const handleClick = () => {
    alert("Button was clicked!");
  };

  return (
    <button onClick={handleClick}>
      Click me!
    </button>
  );
}

export default Button;