<div>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Register a New Vendor</h4>
                            </div>
                            <div class="card-body ring-offset-2">
                                    <div class="form-group">
                                        <label>Vendor Name</label>
                                        <input type="text" class="form-control" wire:model='vendor.name'>
                                    </div>
                                    @error('vendor.name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control phone-number"
                                                wire:model='vendor.phone_number'>
                                        </div>
                                    </div>
                                    @error('vendor.phone_number')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" wire:model='vendor.email'>
                                    </div>
                                    @error('vendor.email')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" wire:model='vendor.address'>
                                    </div>
                                    @error('vendor.address')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body" class="btn-text-right">
                                        <div class="buttons">
                                            <button class="btn btn-success" type="submit"
                                                wire:click.prevent='save'>Save</button>
                                            <a href="{{ route('admin.vendor.index') }}" class="btn btn-danger">Back to
                                                list</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Select</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Default</div>
                                <div class="form-group">
                                    <label>Default Select</label>
                                    <select class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="section-title">Select 2</div>
                                <div class="form-group">
                                    <label>Select2</label>
                                    <select class="form-control select2">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select2 Multiple</label>
                                    <select class="form-control select2" multiple="">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="section-title">jQuery Selectric</div>
                                <div class="form-group">
                                    <label>jQuery Selectric</label>
                                    <select class="form-control selectric">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>jQuery Selectric Multiple</label>
                                    <select class="form-control selectric" multiple="">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="section-title">Select Group Button</div>
                                <div class="form-group">
                                    <label class="form-label">Button Input</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="radio1" value="1"
                                                class="selectgroup-input-radio" checked>
                                            <span class="selectgroup-button">S</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="radio1" value="2"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button">M</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="radio1" value="3"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button">L</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="radio1" value="4"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button">XL</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Icons input</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="2"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-mobile"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="1"
                                                class="selectgroup-input-radio" checked>
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-tablet"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="6"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-laptop"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="5"
                                                class="selectgroup-input-radio">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-times"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Icon input</label>
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="1"
                                                class="selectgroup-input" checked>
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-sun"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="2"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-moon"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="3"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-cloud-rain"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="4"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i
                                                    class="fas fa-cloud"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Your skills</label>
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="HTML"
                                                class="selectgroup-input" checked>
                                            <span class="selectgroup-button">HTML</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="CSS"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">CSS</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="PHP"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">PHP</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="JavaScript"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">JavaScript</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="C++"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">C++</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Date &amp; Time Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="d-block">Date Range Picker With Button</label>
                                    <a href="javascript:;" class="btn btn-primary daterange-btn icon-left btn-icon"><i
                                            class="fas fa-calendar"></i> Choose Date
                                    </a>
                                </div>
                                <div class="form-group">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control datepicker">
                                </div>
                                <div class="form-group">
                                    <label>Date Time Picker</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                                <div class="form-group">
                                    <label>Date Range Picker</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control daterange-cus">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Time Picker</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control timepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
</div>
