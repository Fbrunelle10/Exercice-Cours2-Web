<?php
    echo '<table>
            <tr>
                <th> FirstName </th>
                <th> LastName </th>
            </tr>';
    foreach ($users as $user) {
        echo '<tr> <td>'.$user->get_first_name().'</td> <td>'.$user->get_last_name().'</td></tr>';
    }
    echo '</table>';
?>