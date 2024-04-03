function handleKeyPress(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById('searchButton').click();
  }
}
function searchRecipe() {
  var query = document.getElementById('searchInput').value.toLowerCase();
  var recipes = document.querySelectorAll('[id*="' + query + '"]');
  
  if (recipes.length > 0) {
      var recipe = recipes[0];
      recipe.scrollIntoView({ behavior: 'smooth' });
  } else {
      alert("Recipe not found.");
  }
}