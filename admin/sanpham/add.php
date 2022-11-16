            <div class="row ml-10 ">
                <div class="row">
                    <div class="row title">
                        <h2>Thêm mới sản phẩm </h2>
                    </div>
                    <div class="row fromconten">
                        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                            <div class="row mb-10">
                                Danh mục <br>
                                <select name="iddm">
                                    <option value="">cu</option>
                                    <option value="">hanh</option>
                                    <option value="">rau</option>

                                </select>
                            </div>
                            <div class="row mb-10">
                                Tên sản phẩm<br>
                                <input type="text" name="tensp" required>
                            </div>
                            <div class="row mb-10">
                                Gía<br>
                                <input type="text" name="giasp" required>
                            </div>
                            <div class="row mb-10">
                                Hình<br>
                                <input type="file" name="hinh" required>
                            </div>
                            <div class="row mb-10">
                                Mô tả<br>
                                <textarea name="mota" cols="30" rows="10" required></textarea>
                            </div>

                            <div class="row mb-10">
                                <input type="submit" name="themmoi" value="THÊM MỚI">
                                <input type="submit" value="NHẬP LẠI">
                                <a href="danhsachsp.html"><input type="button" value="danhsach"></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            </div>
            </div>