export default function () {
	const cols = document.querySelectorAll(`[data-element="about-col"]`);
	if (cols) {
		cols.forEach((col) => {
			col.addEventListener("mouseover", () => {
				cols.forEach((c) => {
					c.classList.remove("col-active");
				});
				col.classList.add("col-active");
			});
		});
	}
}
