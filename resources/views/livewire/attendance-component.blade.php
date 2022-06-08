<div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <h6 class="card-header">@if(empty($editForm)) Add Attendance @else Edit Attendance @endif</h6>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="employee">Employee</label>
                            <select wire:model.debounce.500ms="employee" class="form-control @error('employee') is-invalid @enderror" id="employee">
                                <option>Select Employee</option>
                                @forelse ($users as $user)
                                <option value="{{ $user->id }}">{{ Str::ucfirst($user->name) }}</option>
                                @empty
                                <option>No Employee Found</option>
                                @endforelse
                            </select>
                            @error('employee')
                            <div class="invalid-feedback">
                                {{ $errors->first('employee') }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date">Date</label>
                            <input type="date" wire:model.debounce.500ms="attendance_date" class="form-control @error('attendance_date') is-invalid @enderror" id="attendance_date">
                            @error('attendance_date')
                            <div class="invalid-feedback">
                                {{ $errors->first('attendance_date') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="clockin">Clock In {{$clockin}}</label>
                            <input type="text" wire:model.debounce.500ms="clockin" class="timepicker form-control @error('clockin') is-invalid @enderror" id="clockin" placeholder="00:00 AM/PM" data-mintime="10:15 AM" data-maxtime="10:40 AM" onchange="this.dispatchEvent(new InputEvent('input'))" />
                            @error('clockin')
                            <div class="invalid-feedback">
                                {{ $errors->first('clockin') }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clockout">Clock Out</label>
                            <input type="text" wire:model.debounce.500ms="clockout" class="timepicker form-control @error('clockout') is-invalid @enderror" id="clockout" placeholder="00:00 AM/PM" data-mintime="07:20 PM" data-maxtime="08:00 PM" onchange="this.dispatchEvent(new InputEvent('input'))" />
                            @error('clockout')
                            <div class="invalid-feedback">
                                {{ $errors->first('clockout') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="button" class="btn btn-sm @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveAttendance()" @else wire:click.prevent="updateAttendance()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add Attendance @else <i class="fas fa-check-circle"></i> Update Attendance @endif</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <h6 class="card-header">Attendances</h6>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Date</th>
                                <th>Employee</th>
                                <th>Clock In</th>
                                <th>Clock Out</th>
                                <th>Total Hours</th>
                                <th>Status (IN/OUT)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($attendances as $attendance)
                            <tr class="odd">
                                <td>{{ $attendance->date->format('d-M-Y') }}</td>
                                <td>{{ $attendance->user->name }}</td>
                                <td>{{ $attendance->clockin }}</td>
                                <td>{{ $attendance->clockout }}</td>
                                <td>
                                    @php
                                        $time1 = \Carbon\Carbon::createFromTimeString($attendance->clockin);
                                        $time2 = \Carbon\Carbon::createFromTimeString($attendance->clockout);

                                        $total = $time1->floatDiffInHours($time2);
                                    @endphp
                                    {{ number_format((float)$total, 2, '.', '') }} <span>Hours</span>
                                </td>
                                <td>{{ $attendance->status }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info" wire:click.prevent="editDepartment({{ $attendance->id }})"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click.prevent="deleteDepartmentConfirmation({{ $attendance->id }})"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <p class="text-center">No Attendance Found</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    