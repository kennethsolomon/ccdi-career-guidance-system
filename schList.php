
                                    <?php
                                    $sql = "SELECT * FROM municipality ORDER BY id desc";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfSchool" class="form-control" id="dropDownSchool">
                                                <option value=""></option>
                                        ';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row['name'];
                                            $school = $row['school'];
                                            echo '
                                                <option value="'.$school.'">'.$school.'</option>
                                            ';

                                        }
                                            echo '
                                                </select>
                                                ';
                                    }
                                    ?>
