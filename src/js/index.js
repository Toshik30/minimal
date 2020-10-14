import 'scss/style.scss';

console.log('module.hot', module.hot);
if (module.hot) {
	module.hot.accept('scss/style.scss', function() {
		console.log('Update styles');
	});
}

const toTop = document.querySelector(".to-top");

window,addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
