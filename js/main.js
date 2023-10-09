let feedback = $('#blogRow');

// Listens to the event that is trigerred by the user selecting the image in the form, and calls the function with the option that the user selected.
$("#selectPage").on('change', function(){
	feedback.html("<div class='loader-text'><h2>Loading Content</h2></div><div class='loader'></div>");	
  var selected = $(this).children(":selected").val();
  loadContent(selected);
});
 
// A function that uses jQuery.post to transfer the selected option to the server side, and returns the data back from the server.
function loadContent(selected){
  let getContent = selected;

  $.post('guts/blog.php', {inputPage : getContent} , function(data, status, xhr) {
    //Takes the data returned from the server and embeds in the HTML.
    // console.log('status: ' + status + ', data: ' + data);
    feedback.html(data);
  });
}

	//Calls to the function when the page loads.
  $(window).on('load', loadContent('1')); 


//Due to my page url PHP Session variable not passing on initial page load, this gross little workaround will have to do until I've resolved the true issue
  if (window.performance) {
  console.info("window.performance works fine on this browser");
}
  if (performance.navigation.type == 1) {
    console.info("Reloaded page");
  } else {
    console.info("Initial Load");   
    
    setTimeout(function(){
      location.reload();
    }, 200);
  }