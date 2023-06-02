<script>
function submitReview() {
  const movieTitle = localStorage.getItem('movie-title');
  const reviewerName = document.getElementById('reviewer_name').value;
  const reviewText = document.getElementById('review').value;
  const rating = document.querySelector('input[name="rate"]:checked').value;

  // Create an object with the review data
  const reviewData = {
    movieTitle: movieTitle,
    reviewerName: reviewerName,
    reviewText: reviewText,
    rating: rating
  };

  // Store the review data in Local Storage
  const reviews = JSON.parse(localStorage.getItem('movie-reviews')) || {};
  if (!reviews[movieTitle]) {
    reviews[movieTitle] = [];
  }
  reviews[movieTitle].push(reviewData);
  localStorage.setItem('movie-reviews', JSON.stringify(reviews));
}
</script>
