@extends('siswa.soal.basesoal')

@section('morecss')
    {{-- DROPZONE --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endsection
@section('content')
    @if (\Illuminate\Support\Facades\Session::has('finish'))
        <script>
            Swal.fire({
                title: 'Success',
                text: '{{ \Illuminate\Support\Facades\Session::get('finish') }}',
                icon: 'success',
                timer: 1000
            }).then(() => {
                window.location.href = '{{ route('siswa.soal') }}';
            })
        </script>
    @endif
    <div class="dashboard">
        <div class="menu-container">
            <div class="menu d-flex justify-content-between ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="me-5">
                    <ol class="breadcrumb mb-0 ">
                        <li class="breadcrumb-item "><a href="#"> <span class="small text-black-50 ">(sisa
                                    waktu: <span id="rest-time">--:--</span>)</span></a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center " style="color: gray">
                    <span class="material-symbols-outlined me-2 ">
                        error
                    </span><span>Jika ada pertanyaan, silahkan hubungi admin</span>
                </div>
            </div>
        </div>
        <form method="post" id="form-finish"
              action="{{ route('siswa.soal.by.id.finish', ['id' => $current_soal->paket_soal_id]) }}">
            @csrf
        </form>
        <form method="post" id="form-jawaban">
            @csrf
            <input type="hidden" name="soal" value="{{ $current_soal->id }}">
            <input type="hidden" name="jawaban" id="jawaban-id">
        </form>
        <div class="menu-container">
            <div class="menu overflow-hidden">
                <div class="row">
                    <div class="col-5">
                        <div class="title-container">
                            <p class="title">Soal Nomor {{ $current_soal_index }}</p>
                        </div>
                        @if($current_soal->gambar_soal !== null)
                            <img src="{{ asset($current_soal->gambar_soal) }}" class="w-100" alt="img-"/>
                        @endif

                    </div>
                    <div class="col-7">
                        <div class="title-container">
                            <p class="title">Soal</p>

                        </div>
                        <p class="mb-5 ">{{ $current_soal->soal }}</p>

                        <div class="title-container">
                            <p class="title">Pilihan Jawaban</p>

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban" id="flexRadioDefault1"
                                   value="1" {{ $current_jawaban_by_soal !== null ? ($current_jawaban_by_soal->jawaban === 1 ? 'checked' : '' ) : '' }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <span>A. </span> {{ $current_soal->pilihan_1 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban" id="flexRadioDefault2"
                                   value="2" {{ $current_jawaban_by_soal !== null ? ($current_jawaban_by_soal->jawaban === 2 ? 'checked' : '' ) : '' }}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <span>B. </span> {{ $current_soal->pilihan_2 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban" id="flexRadioDefault3"
                                   value="3" {{ $current_jawaban_by_soal !== null ? ($current_jawaban_by_soal->jawaban === 3 ? 'checked' : '' ) : '' }}>
                            <label class="form-check-label" for="flexRadioDefault3">
                                <span>C. </span>{{ $current_soal->pilihan_3 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban" id="flexRadioDefault4"
                                   value="4" {{ $current_jawaban_by_soal !== null ? ($current_jawaban_by_soal->jawaban === 4 ? 'checked' : '' ) : '' }}>
                            <label class="form-check-label" for="flexRadioDefault4">
                                <span>D. </span>{{ $current_soal->pilihan_4 }}
                            </label>
                        </div>

                        <button type="button" class="bt-primary  me-auto mt-5 btn-jawab"
                                data-id="{{ $current_soal->id }}">Simpan Jawaban
                            dan {{ $last_soal ? 'Selesai' : 'ke Soal berikutnya' }}
                        </button>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection

@section('morejs')
    <script>
        var timeStart = '{{ $time_start }}';
        var duration = '{{ $duration }}';
        var interval;

        function startTimer() {
            let durationTime = parseInt(duration);
            let start = new Date(timeStart);
            let now = new Date();
            let timeDiff = start.getTime() - now.getTime();
            let diffInSeconds = Math.floor(timeDiff / 1000);
            let minute = Math.floor((diffInSeconds % 3600) / 60);
            let second = Math.floor(diffInSeconds % 60);
            let reverseMinute = durationTime + minute;
            let reverseSecond = 60 + second;
            let restTime = reverseMinute + ':' + reverseSecond;
            $('#rest-time').html(restTime);
            if (interval) {
                if (reverseMinute < 0) {
                    clearInterval(interval)
                    $('#rest-time').html('00:00');
                    $('#form-finish').submit();
                }
            } else {
                interval = setInterval(startTimer, 1000);
            }
        }

        function eventJawab() {
            $('.btn-jawab').on('click', function (e) {
                let jawaban = $('input[name=jawaban]:checked').val();
                $('#jawaban-id').val(jawaban);
                e.preventDefault();
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "apakah anda yakin dengan jawaban yang anda pilih?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-jawaban').submit();
                    }
                });
            })
        }

        $(document).ready(function () {
            startTimer();
            eventJawab();
        });
    </script>
@endsection
