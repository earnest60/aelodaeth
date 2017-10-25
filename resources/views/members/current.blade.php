<h1>Current Members</h1>

<table>
  <thead>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Surname</td>
    <td>Address 1</td>
    <td>Address 2</td>
    <td>City/Town</td>
    <td>County</td>
    <td>Post Code</td>
    <td>Telephone</td>
    <td>Actions</td>
  <tr>
  </thead>
  <tbody>
<?php
foreach($members as $member)
{
    echo '<tr>';
    echo '<td>'.$member->id.'</td>';
    echo '<td>'.$member->first_name.'</td>';
    echo '<td>'.$member->last_name.'</td>';
    echo '<td>'.$member->address_line1.'</td>';
    echo '<td>'.$member->address_line2.'</td>';
    echo '<td>'.$member->address_city.'</td>';
    echo '<td>'.$member->address_state.'</td>';
    echo '<td>'.$member->address_zip.'</td>';
    echo '<td>'.$member->telephone.'</td>';
    echo '<td><a href="#">View Member</a></td>';
    echo '</tr>';
}
?>
  </tbody>
</table>
