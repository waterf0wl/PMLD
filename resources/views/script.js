const sidebarItems = document.querySelectorAll(".sidebar li");

sidebarItems.forEach(item => {
  item.addEventListener("click", () => {
    // Check if the item has a sub-menu
    const subMenu = item.querySelector(".sub-menu");
    if (subMenu) {
      // Toggle the sub-menu visibility
      const isCurrentlyVisible = subMenu.style.display === "block";
      
      // Hide all submenus first to close any open ones
      document.querySelectorAll(".sub-menu").forEach(menu => {
        menu.style.display = "none";
      });

      // Toggle the clicked submenu visibility
      subMenu.style.display = isCurrentlyVisible ? "none" : "block";
    }
  });
});

