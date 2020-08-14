
                                    <?php
                                    $sql = "SELECT * FROM course";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfCourse" class="form-control" id="dropDownSchool">
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
