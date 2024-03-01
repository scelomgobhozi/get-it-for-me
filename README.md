# Get That For Me

"Get That For Me" is a web application I developed to address the common issue of forgetting to pick up items during grocery runs. This tool is particularly useful for those living with housemates or family members. Below is an overview of its key functionalities:

## Key Functionalities

- **Group Creation and Invitation**: Users have the capability to create a group within the app and generate an invitation link for their housemates to join.

- **Joining Requests**: Housemates can use the invitation link to request to join the group. These requests are then reviewed by the group admin.

- **Approval by Admin**: The group admin is empowered to approve or decline joining requests, thereby controlling who can join the group.

- **Prioritized Item Requests**: Members can list items they need, assigning them a priority level (Low, Medium, High) via a dropdown menu. This priority is visually indicated on the list by the item's background color, facilitating easy identification of each item's urgency.

- **Admin Management**: The admin has the capability to remove any member from the group if necessary.

- **Item Purchase and Removal**: When a group member purchases an item, it can be checked off and will automatically be removed from the list.

- **Personal Wish Lists (Bonus Feature)**: Users can create personal wish lists for items they'd like someone else to pick up. Members of the same group can view each other's lists by clicking on their profile names.

## Tech Stack Overview

- **Front-End**: Vue.js was chosen for its reactivity and ease of use in building dynamic user interfaces.

- **Back-End**: PHP with Laravel framework was selected for the server-side to leverage Laravel's robust features and elegant syntax for web development.

- **Integration with Inertia JS**: To seamlessly integrate the front-end and back-end, Inertia JS was used. It offers a single-page application experience by utilizing traditional server-side page rendering, while Vue.js enhances the dynamic aspects of user interaction.
