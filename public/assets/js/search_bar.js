


function moveItems(containerSelector, direction) {
    const items = document.querySelectorAll(`${containerSelector} .item`);
    const container = document.querySelector(containerSelector);

    if (direction === 'right') {
        container.appendChild(items[0]);
    } else if (direction === 'left') {
        container.prepend(items[items.length - 1]);
    }
}
