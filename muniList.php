
                                    <?php
                                    $sql = "SELECT * FROM list_municipality";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfMunicipality" class="form-control" id="dropDownSchool">
                                                <option value=""></option>
                                        ';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row['name'];
                                            echo '
                                                <option value="'.$name.'">'.$name.'</option>
                                            ';

                                        }
                                            echo '
                                                </select>
                                                ';
                                    }
                                    ?>
