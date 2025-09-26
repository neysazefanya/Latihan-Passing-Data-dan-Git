<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Pegawai</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fdf2f8, #e0e7ff, #dbeafe);
            margin: 0;
            padding: 2rem;
            color: #374151;
        }

        .card {
            max-width: 850px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(14px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 3rem;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            color: #7c3aed;
            margin-bottom: 2rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.7rem;
        }

        h1 i {
            color: #ec4899;
            font-size: 2.5rem;
        }

        .profile {
            display: flex;
            gap: 2.5rem;
            align-items: center;
            margin-bottom: 2rem;
        }

        .profile-pic img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #f0f0ff;
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.3);
        }

        .biodata {
            flex: 1;
        }

        .biodata table {
            width: 100%;
            border-collapse: collapse;
        }

        .biodata td {
            padding: 10px 8px;
            vertical-align: top;
            font-size: 1rem;
        }

        .biodata td.label {
            font-weight: 600;
            color: #6d28d9;
            width: 180px;
            white-space: nowrap;
        }

        .biodata td.separator {
            width: 20px;
            text-align: center;
            color: #9ca3af;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-top: 0.6rem;
        }

        .skills span {
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        /* warna acak utk skills */
        .skills span:nth-child(5n+1) { background: linear-gradient(135deg,#ec4899,#f472b6); }
        .skills span:nth-child(5n+2) { background: linear-gradient(135deg,#3b82f6,#60a5fa); }
        .skills span:nth-child(5n+3) { background: linear-gradient(135deg,#10b981,#34d399); }
        .skills span:nth-child(5n+4) { background: linear-gradient(135deg,#f59e0b,#fbbf24); }
        .skills span:nth-child(5n+5) { background: linear-gradient(135deg,#8b5cf6,#a78bfa); }

        .message {
            margin-top: 2.5rem;
            padding: 1.3rem;
            border-radius: 14px;
            font-weight: 600;
            font-size: 1.05rem;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.7rem;
        }

        .message i { font-size: 1.3rem; }

        .newbie {
            background: #fff7ed;
            color: #c2410c;
            border: 2px solid #fb923c;
        }

        .senior {
            background: #ecfdf5;
            color: #047857;
            border: 2px solid #34d399;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><i class="fas fa-user-tie"></i> Profil Pegawai</h1>

        <div class="profile">
            <div class="profile-pic">
                <img src="{{ $photo }}" alt="Foto Pegawai">
            </div>
            <div class="biodata">
                <table>
                    <tr>
                        <td class="label"><i class="fas fa-id-badge"></i> Nama</td>
                        <td class="separator">:</td>
                        <td>{{ $employee_name }}</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-birthday-cake"></i> Usia</td>
                        <td class="separator">:</td>
                        <td>{{ $age }} tahun</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-briefcase"></i> Jabatan</td>
                        <td class="separator">:</td>
                        <td>{{ $position }}</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-lightbulb"></i> Skills</td>
                        <td class="separator">:</td>
                        <td>
                            <div class="skills">
                                @foreach ($skills as $skill)
                                    <span>{{ $skill }}</span>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-calendar-alt"></i> Tanggal Bergabung</td>
                        <td class="separator">:</td>
                        <td>{{ \Carbon\Carbon::parse($join_date)->format('d M Y H:i') }}</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-clock"></i> Durasi Kerja</td>
                        <td class="separator">:</td>
                        <td>{{ $working_duration }}</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-money-bill-wave"></i> Gaji</td>
                        <td class="separator">:</td>
                        <td>{{ $salary }}</td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fas fa-bullseye"></i> Career Goal</td>
                        <td class="separator">:</td>
                        <td>{{ $career_goal }}</td>
                    </tr>
                </table>
            </div>
        </div>

        @if (preg_match('/^0 tahun/', $working_duration))
            <div class="message newbie">
                <i class="fas fa-info-circle"></i> Masih pegawai baru, tingkatkan pengalaman kerja!
            </div>
        @else
            <div class="message senior">
                <i class="fas fa-star"></i> Sudah senior, jadilah teladan bagi rekan kerja!
            </div>
        @endif
    </div>

</body>
</html>
