<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-adsense-account" content="ca-pub-1684242835147633">
    
    <title>Tamil to English – Spoken English Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Noto+Sans+Tamil:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    
    <style>
        :root {
            --indigo: #4f46e5;
            --violet: #7c3aed;
            --rose: #f43f5e;
            --amber: #f59e0b;
            --emerald: #10b981;
            --glass: rgba(255, 255, 255, 0.10);
            --glass-border: rgba(255, 255, 255, 0.18);
            --text-light: rgba(255, 255, 255, 0.92);
            --text-muted: rgba(255, 255, 255, 0.60);
            --card-bg: rgba(255, 255, 255, 0.08);
            --shadow: 0 8px 32px rgba(31, 38, 135, 0.22);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0c29 0%, #302b63 45%, #24243e 100%);
            color: var(--text-light);
            overflow-x: hidden;
        }

        /* ─── Animated background orbs ─── */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.18;
            pointer-events: none;
            z-index: 0;
            animation: float 8s ease-in-out infinite alternate;
        }

        .orb-1 {
            width: 420px;
            height: 420px;
            background: var(--indigo);
            top: -100px;
            left: -100px;
        }

        .orb-2 {
            width: 320px;
            height: 320px;
            background: var(--rose);
            bottom: -80px;
            right: -80px;
            animation-delay: 2s;
        }

        .orb-3 {
            width: 260px;
            height: 260px;
            background: var(--violet);
            top: 40%;
            left: 50%;
            animation-delay: 4s;
        }

        @keyframes float {
            from {
                transform: translateY(0) scale(1);
            }

            to {
                transform: translateY(-30px) scale(1.06);
            }
        }

        /* ─── Layout wrapper ─── */
        .app-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            padding: 0 0 60px;
        }

        /* ─── Header ─── */
        header {
            background: rgba(15, 12, 41, 0.70);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--glass-border);
            padding: 14px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.3rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .logo-badge .icon-ring {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--indigo), var(--violet));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 0 16px rgba(124, 58, 237, 0.5);
        }

        .score-pill {
            background: linear-gradient(90deg, var(--indigo), var(--violet));
            border-radius: 50px;
            padding: 6px 18px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4);
            white-space: nowrap;
        }

        .timer-pill {
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 50px;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 600;
            backdrop-filter: blur(8px);
        }

        .timer-pill.danger {
            background: rgba(244, 63, 94, 0.25);
            border-color: var(--rose);
            color: #fda4af;
        }

        /* ─── Difficulty tabs ─── */
        .diff-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            padding: 24px 16px 8px;
        }

        .diff-btn {
            flex: 0 0 auto;
            border: none;
            outline: none;
            padding: 10px 28px;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.88rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
        }

        .diff-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.15);
            opacity: 0;
            transition: opacity 0.2s;
        }

        .diff-btn:hover::before {
            opacity: 1;
        }

        .diff-btn:active {
            transform: scale(0.96);
        }

        .diff-btn.easy {
            background: linear-gradient(135deg, #059669, #10b981);
            box-shadow: 0 4px 18px rgba(16, 185, 129, 0.35);
            color: #fff;
        }

        .diff-btn.med {
            background: linear-gradient(135deg, #d97706, #f59e0b);
            box-shadow: 0 4px 18px rgba(245, 158, 11, 0.35);
            color: #fff;
        }

        .diff-btn.hard {
            background: linear-gradient(135deg, #be123c, #f43f5e);
            box-shadow: 0 4px 18px rgba(244, 63, 94, 0.35);
            color: #fff;
        }

        .diff-btn.active {
            transform: scale(1.08) translateY(-2px);
            filter: brightness(1.15);
        }

        /* ─── Progress bar ─── */
        .progress-wrap {
            padding: 12px 0 4px;
        }

        .prog-meta {
            font-size: 0.78rem;
            color: var(--text-muted);
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .prog-bar-track {
            height: 6px;
            border-radius: 99px;
            background: rgba(255, 255, 255, 0.10);
            overflow: hidden;
        }

        .prog-bar-fill {
            height: 100%;
            border-radius: 99px;
            background: linear-gradient(90deg, var(--indigo), var(--violet), var(--rose));
            transition: width 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        /* ─── Main card ─── */
        .main-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 36px;
            box-shadow: var(--shadow);
            margin-top: 16px;
            animation: slideUp 0.4s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .question-label {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .question-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--glass-border);
        }

        .tamil-sentence {
            font-family: 'Noto Sans Tamil', 'Poppins', sans-serif;
            font-size: 1.65rem;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #c4b5fd, #a5f3fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sentence-hint {
            font-size: 0.78rem;
            color: var(--text-muted);
            margin-bottom: 24px;
        }

        /* ─── Input area ─── */
        .answer-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.06);
            border: 2px solid var(--glass-border);
            border-radius: 14px;
            padding: 14px 18px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.25s, box-shadow 0.25s;
            resize: none;
        }

        .answer-input::placeholder {
            color: var(--text-muted);
        }

        .answer-input:focus {
            outline: none;
            border-color: var(--violet);
            box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.15);
        }

        .answer-input.correct {
            border-color: var(--emerald);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.15);
        }

        .answer-input.wrong {
            border-color: var(--rose);
            box-shadow: 0 0 0 4px rgba(244, 63, 94, 0.15);
        }

        /* ─── Buttons ─── */
        .btn-submit {
            background: linear-gradient(135deg, var(--indigo), var(--violet));
            border: none;
            border-radius: 12px;
            padding: 14px 32px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: #fff;
            cursor: pointer;
            width: 100%;
            margin-top: 16px;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 6px 20px rgba(79, 70, 229, 0.4);
            letter-spacing: 0.5px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(79, 70, 229, 0.5);
        }

        .btn-submit:active {
            transform: scale(0.98);
        }

        .btn-submit:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .nav-btn {
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 11px 22px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.88rem;
            color: #fff;
            cursor: pointer;
            transition: all 0.25s;
            backdrop-filter: blur(8px);
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.16);
            transform: translateY(-1px);
        }

        .nav-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
            transform: none;
        }

        .btn-reset {
            background: rgba(244, 63, 94, 0.15);
            border: 1px solid rgba(244, 63, 94, 0.3);
            border-radius: 12px;
            padding: 9px 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.82rem;
            color: #fda4af;
            cursor: pointer;
            transition: all 0.25s;
        }

        .btn-reset:hover {
            background: rgba(244, 63, 94, 0.25);
        }

        /* ─── Feedback panel ─── */
        .feedback-panel {
            margin-top: 24px;
            border-radius: 18px;
            overflow: hidden;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feedback-correct {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15), rgba(5, 150, 105, 0.10));
            border: 1px solid rgba(16, 185, 129, 0.30);
        }

        .feedback-wrong {
            background: linear-gradient(135deg, rgba(244, 63, 94, 0.12), rgba(190, 18, 60, 0.08));
            border: 1px solid rgba(244, 63, 94, 0.25);
        }

        .feedback-header {
            padding: 18px 22px 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feedback-icon {
            font-size: 1.8rem;
            line-height: 1;
        }

        .feedback-title {
            font-size: 1.1rem;
            font-weight: 700;
        }

        .feedback-subtitle {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .feedback-body {
            padding: 0 22px 22px;
        }

        .correct-answer-box {
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid rgba(16, 185, 129, 0.25);
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 16px;
        }

        .correct-answer-box .label {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #6ee7b7;
            margin-bottom: 4px;
        }

        .correct-answer-box .answer-text {
            font-size: 1.08rem;
            font-weight: 600;
            color: #d1fae5;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 14px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 14px 16px;
        }

        .info-card .ic-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .info-card .ic-content {
            font-size: 0.84rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, 0.82);
        }

        .word-chip {
            display: inline-flex;
            flex-direction: column;
            background: rgba(79, 70, 229, 0.18);
            border: 1px solid rgba(79, 70, 229, 0.3);
            border-radius: 8px;
            padding: 5px 10px;
            margin: 3px;
            transition: transform 0.2s;
        }

        .word-chip:hover {
            transform: translateY(-2px);
        }

        .word-chip .wc-eng {
            font-size: 0.8rem;
            font-weight: 600;
            color: #c4b5fd;
        }

        .word-chip .wc-tam {
            font-size: 0.72rem;
            color: var(--text-muted);
        }

        .tip-box {
            margin-top: 14px;
            background: rgba(245, 158, 11, 0.10);
            border: 1px solid rgba(245, 158, 11, 0.25);
            border-radius: 12px;
            padding: 14px 16px;
        }

        .tip-box .tb-label {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #fbbf24;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .tip-box .tb-content {
            font-size: 0.84rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, 0.80);
        }

        /* ─── Score board modal-style card ─── */
        .scoreboard {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 24px;
            text-align: center;
            margin-top: 16px;
        }

        .score-ring {
            width: 88px;
            height: 88px;
            border-radius: 50%;
            margin: 0 auto 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: conic-gradient(var(--indigo) calc(var(--pct, 0) * 1%), #1e1b4b calc(var(--pct, 0) * 1%));
            position: relative;
            box-shadow: 0 0 24px rgba(79, 70, 229, 0.4);
        }

        .score-ring::after {
            content: '';
            position: absolute;
            inset: 8px;
            border-radius: 50%;
            background: #1a1740;
        }

        .score-ring-inner {
            position: relative;
            z-index: 1;
            font-size: 1.3rem;
            font-weight: 800;
        }

        .score-stats {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 14px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-num {
            font-size: 1.4rem;
            font-weight: 800;
        }

        .stat-lbl {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        /* ─── Confetti burst ─── */
        .confetti-container {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 999;
            overflow: hidden;
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 2px;
            animation: confettiFall 1.8s ease-in forwards;
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(-20px) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0;
            }
        }

        /* ─── Toast ─── */
        .toast-wrap {
            position: fixed;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 200;
        }

        .toast-msg {
            background: rgba(30, 27, 75, 0.95);
            backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 12px 22px;
            font-size: 0.88rem;
            font-weight: 600;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
            animation: toastIn 0.3s ease, toastOut 0.3s ease 2.2s forwards;
            white-space: nowrap;
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes toastOut {
            to {
                opacity: 0;
                transform: translateY(10px);
            }
        }

        /* ─── Responsive ─── */
        @media (max-width: 768px) {
            .main-card {
                padding: 22px 16px;
                border-radius: 18px;
            }

            .tamil-sentence {
                font-size: 1.25rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .logo-badge {
                font-size: 1.05rem;
            }

            .diff-btn {
                padding: 8px 18px;
                font-size: 0.82rem;
            }
        }

        @media (max-width: 480px) {
            .tamil-sentence {
                font-size: 1.1rem;
            }

            .feedback-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .score-stats {
                gap: 14px;
            }

            .stat-num {
                font-size: 1.1rem;
            }
        }

        @media (min-width: 1200px) {
            .main-card {
                padding: 48px;
            }

            .tamil-sentence {
                font-size: 1.9rem;
            }
        }

        /* ─── Utility ─── */
        .hidden {
            display: none !important;
        }

        .section-divider {
            height: 1px;
            background: var(--glass-border);
            margin: 20px 0;
        }

        .full-grid {
            grid-column: 1 / -1;
        }

        /* ─── Streak badge ─── */
        .streak-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.3);
            border-radius: 50px;
            padding: 4px 12px;
            font-size: 0.78rem;
            font-weight: 600;
            color: #fbbf24;
        }

        /* ─── Skeleton shimmer placeholder ─── */
        .shimmer {
            animation: shimmer 1.5s infinite;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.10) 50%, rgba(255, 255, 255, 0.04) 100%);
            background-size: 200% 100%;
        }

        @keyframes shimmer {
            to {
                background-position: -200% 0;
            }
        }
    </style>

</head>

<body>

    <!-- Background orbs -->
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <!-- Confetti container -->
    <div class="confetti-container" id="confettiBox"></div>

    <!-- Toast -->
    <div class="toast-wrap hidden" id="toastWrap">
        <div class="toast-msg" id="toastMsg"></div>
    </div>

    <div class="app-wrapper">

        <!-- ─── Header ─── -->
        <header>
            <div class="container">
                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                    <div class="logo-badge">
                        <div class="icon-ring"><i class="fa-solid fa-language"></i></div>
                        <span>தமிழ் → English</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <div class="streak-badge" id="streakBadge"><i class="fa-solid fa-fire"></i> <span id="streakCount">0</span> streak</div>
                        <div class="score-pill"><i class="fa-solid fa-star me-1"></i> Score: <span id="headerScore">0</span></div>
                        <div class="timer-pill" id="timerPill"><i class="fa-regular fa-clock me-1"></i> <span id="timerDisplay">01:00</span></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container" style="max-width:860px">

            <!-- ─── Difficulty selector ─── -->
            <div class="diff-tabs">
                <button class="diff-btn easy active" onclick="selectDifficulty('easy',this)"><i class="fa-solid fa-seedling me-2"></i>Easy (100)</button>
                <button class="diff-btn med" onclick="selectDifficulty('medium',this)"><i class="fa-solid fa-bolt me-2"></i>Medium (100)</button>
                <button class="diff-btn hard" onclick="selectDifficulty('hard',this)"><i class="fa-solid fa-fire-flame-curved me-2"></i>Hard (100)</button>
            </div>

            <!-- ─── Progress ─── -->
            <div class="progress-wrap">
                <div class="prog-meta">
                    <span id="progLabel">Question 1 of 100</span>
                    <span id="progPct">0%</span>
                </div>
                <div class="prog-bar-track">
                    <div class="prog-bar-fill" id="progBar" style="width:1%"></div>
                </div>
            </div>

            <div class="row g-3 mt-1">

                <!-- ─── Main practice card ─── -->
                <div class="col-lg-8">
                    <div class="main-card">
                        <div class="question-label"><i class="fa-solid fa-comment-dots"></i> Translate to English</div>
                        <div class="tamil-sentence" id="tamilSentence">…</div>
                        <div class="sentence-hint" id="sentenceHint"><i class="fa-regular fa-lightbulb me-1"></i>Type the English translation below</div>

                        <textarea class="answer-input" id="answerInput" rows="3" placeholder="Type your English translation here…"></textarea>
                        <button class="btn-submit" id="submitBtn" onclick="checkAnswer()"><i class="fa-solid fa-paper-plane me-2"></i>Submit Answer</button>

                        <!-- Feedback panel -->
                        <div class="feedback-panel hidden" id="feedbackPanel"></div>

                        <!-- Navigation -->
                        <div class="d-flex justify-content-between align-items-center mt-4 gap-2 flex-wrap">
                            <button class="nav-btn" id="prevBtn" onclick="navigate(-1)"><i class="fa-solid fa-chevron-left me-1"></i>Previous</button>
                            <button class="btn-reset" onclick="resetPractice()"><i class="fa-solid fa-rotate me-1"></i>Reset</button>
                            <button class="nav-btn" id="nextBtn" onclick="navigate(1)">Next<i class="fa-solid fa-chevron-right ms-1"></i></button>
                        </div>
                    </div>
                </div>

                <!-- ─── Scoreboard ─── -->
                <div class="col-lg-4">
                    <div class="scoreboard">
                        <div style="font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted);margin-bottom:14px">Score Board</div>
                        <div class="score-ring" id="scoreRing" style="--pct:0">
                            <div class="score-ring-inner" id="ringPct">0%</div>
                        </div>
                        <div class="score-stats">
                            <div class="stat-item">
                                <div class="stat-num" style="color:#6ee7b7" id="sbCorrect">0</div>
                                <div class="stat-lbl">Correct</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-num" style="color:#fda4af" id="sbWrong">0</div>
                                <div class="stat-lbl">Wrong</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-num" style="color:#c4b5fd" id="sbTotal">0</div>
                                <div class="stat-lbl">Attempted</div>
                            </div>
                        </div>
                    </div>

                    <div class="scoreboard mt-3" style="text-align:left">
                        <div style="font-size:0.7rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted);margin-bottom:12px">Quick Stats</div>
                        <div class="d-flex flex-column gap-2" id="quickStats">
                            <div class="d-flex justify-content-between"><span style="color:var(--text-muted);font-size:0.82rem">Current level</span><span style="font-weight:600;font-size:0.82rem;color:#c4b5fd" id="qsLevel">Easy</span></div>
                            <div class="d-flex justify-content-between"><span style="color:var(--text-muted);font-size:0.82rem">Best streak</span><span style="font-weight:600;font-size:0.82rem;color:#fbbf24" id="qsStreak">0</span></div>
                            <div class="d-flex justify-content-between"><span style="color:var(--text-muted);font-size:0.82rem">Accuracy</span><span style="font-weight:600;font-size:0.82rem;color:#6ee7b7" id="qsAcc">—</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1684242835147633"
     crossorigin="anonymous"></script>

    <script>
        
        const sentences = {

            easy: [{
                    tamil: "நான் ஒரு மாணவன்.",
                    english: "I am a student.",
                    grammar: "'I' is the subject (first person singular). 'am' is the linking verb for 'I'. 'a student' is the predicate noun describing the subject.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "a",
                        tam: "ஒரு"
                    }, {
                        eng: "student",
                        tam: "மாணவன்"
                    }],
                    tamilMeaning: "நான் ஒரு மாணவன்.",
                    tips: "Use 'am' only with 'I'. The article 'a' is used before consonant sounds."
                },
                {
                    tamil: "அவள் அழகானவள்.",
                    english: "She is beautiful.",
                    grammar: "'She' is a third-person singular feminine pronoun. 'is' pairs with singular subjects (he/she/it). 'beautiful' is the predicate adjective.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "beautiful",
                        tam: "அழகானவள்"
                    }],
                    tamilMeaning: "அவள் அழகானவள்.",
                    tips: "'He/She/It' always takes 'is'. Remember: I→am, You/We/They→are, He/She/It→is."
                },
                {
                    tamil: "இது என் புத்தகம்.",
                    english: "This is my book.",
                    grammar: "'This' is a demonstrative pronoun pointing to something nearby. 'is' is the linking verb. 'my book' is the noun phrase (possessive + noun).",
                    wordMeanings: [{
                        eng: "This",
                        tam: "இது"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "my",
                        tam: "என்"
                    }, {
                        eng: "book",
                        tam: "புத்தகம்"
                    }],
                    tamilMeaning: "இது என் புத்தகம்.",
                    tips: "Use 'This' for nearby objects, 'That' for faraway ones."
                },
                {
                    tamil: "நாய் ஒடுகிறது.",
                    english: "The dog is running.",
                    grammar: "Present continuous tense: subject + is/am/are + verb-ing. 'The dog' (singular) → 'is'. 'running' = run + -ing.",
                    wordMeanings: [{
                        eng: "The",
                        tam: "அந்த/ஒரு"
                    }, {
                        eng: "dog",
                        tam: "நாய்"
                    }, {
                        eng: "is running",
                        tam: "ஓடுகிறது"
                    }],
                    tamilMeaning: "நாய் ஓடுகிறது.",
                    tips: "Add -ing to the verb for present continuous. If the verb ends in 'e', drop the 'e' before adding -ing (run→running)."
                },
                {
                    tamil: "வானம் நீலமாக இருக்கிறது.",
                    english: "The sky is blue.",
                    grammar: "Subject 'The sky' (singular) + linking verb 'is' + adjective 'blue'. No action involved; 'is' links the subject to its description.",
                    wordMeanings: [{
                        eng: "The sky",
                        tam: "வானம்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "blue",
                        tam: "நீலமாக"
                    }],
                    tamilMeaning: "வானம் நீலமாக இருக்கிறது.",
                    tips: "Linking verbs (is, are, was, were) describe states, not actions."
                },
                {
                    tamil: "எனக்கு தண்ணீர் வேண்டும்.",
                    english: "I need water.",
                    grammar: "Simple present tense: subject + base verb. 'I' + 'need' (no -s because subject is 'I'). 'water' is an uncountable noun, so no article is used.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "need",
                        tam: "வேண்டும்"
                    }, {
                        eng: "water",
                        tam: "தண்ணீர்"
                    }],
                    tamilMeaning: "எனக்கு தண்ணீர் வேண்டும்.",
                    tips: "Uncountable nouns like water, rice, milk do not take 'a/an'."
                },
                {
                    tamil: "அவர் ஆசிரியர்.",
                    english: "He is a teacher.",
                    grammar: "Simple present with linking verb 'is'. 'He' (third person masculine singular) + 'is' + article 'a' + noun 'teacher'.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "a teacher",
                        tam: "ஒரு ஆசிரியர்"
                    }],
                    tamilMeaning: "அவர் ஒரு ஆசிரியர்.",
                    tips: "Professions used as predicate nouns always need the article 'a/an': a doctor, an engineer."
                },
                {
                    tamil: "பறவைகள் பாடுகின்றன.",
                    english: "The birds are singing.",
                    grammar: "Present continuous: subject 'The birds' (plural) + 'are' + 'singing'. Plural subjects use 'are' instead of 'is'.",
                    wordMeanings: [{
                        eng: "The birds",
                        tam: "பறவைகள்"
                    }, {
                        eng: "are singing",
                        tam: "பாடுகின்றன"
                    }],
                    tamilMeaning: "பறவைகள் பாடுகின்றன.",
                    tips: "Plural → are; Singular → is. Always match the verb to the number of the subject."
                },
                {
                    tamil: "நான் சாப்பிட்டேன்.",
                    english: "I ate food.",
                    grammar: "Simple past tense: 'ate' is the irregular past form of 'eat'. No auxiliary verb needed in simple past.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "ate",
                        tam: "சாப்பிட்டேன்"
                    }, {
                        eng: "food",
                        tam: "சாப்பாடு/உணவு"
                    }],
                    tamilMeaning: "நான் சாப்பிட்டேன்.",
                    tips: "Common irregular verbs: eat→ate, go→went, come→came, see→saw."
                },
                {
                    tamil: "மழை பெய்கிறது.",
                    english: "It is raining.",
                    grammar: "'It' is the dummy/impersonal subject used for weather. Present continuous 'is raining' shows ongoing action.",
                    wordMeanings: [{
                        eng: "It",
                        tam: "அது (வானிலை குறிக்க)"
                    }, {
                        eng: "is raining",
                        tam: "மழை பெய்கிறது"
                    }],
                    tamilMeaning: "மழை பெய்கிறது.",
                    tips: "Weather sentences in English always use 'It' as the subject: It is hot, It is cold, It is windy."
                },
                {
                    tamil: "என் பெயர் ராஜன்.",
                    english: "My name is Rajan.",
                    grammar: "Possessive adjective 'My' + noun 'name' form the subject. Linking verb 'is' connects to the proper noun 'Rajan'.",
                    wordMeanings: [{
                        eng: "My",
                        tam: "என்"
                    }, {
                        eng: "name",
                        tam: "பெயர்"
                    }, {
                        eng: "is",
                        tam: "ஆகும்"
                    }, {
                        eng: "Rajan",
                        tam: "ராஜன்"
                    }],
                    tamilMeaning: "என் பெயர் ராஜன்.",
                    tips: "Possessive adjectives: my, your, his, her, its, our, their — always precede a noun."
                },
                {
                    tamil: "அவர்கள் விளையாடுகிறார்கள்.",
                    english: "They are playing.",
                    grammar: "Present continuous: 'They' (plural) + 'are' + 'playing'. No object needed here—the action is intransitive.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "are playing",
                        tam: "விளையாடுகிறார்கள்"
                    }],
                    tamilMeaning: "அவர்கள் விளையாடுகிறார்கள்.",
                    tips: "'Playing' can be intransitive (They are playing) or transitive (They are playing football)."
                },
                {
                    tamil: "நான் தூங்குகிறேன்.",
                    english: "I am sleeping.",
                    grammar: "Present continuous with 'am' (used only with 'I'). 'sleeping' = sleep + -ing.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am sleeping",
                        tam: "தூங்குகிறேன்"
                    }],
                    tamilMeaning: "நான் தூங்குகிறேன்.",
                    tips: "'Am' is exclusively for the pronoun 'I'."
                },
                {
                    tamil: "கதவு திறந்திருக்கிறது.",
                    english: "The door is open.",
                    grammar: "'The door' (definite article + noun) + linking verb 'is' + adjective 'open'. Describes the state of the door.",
                    wordMeanings: [{
                        eng: "The door",
                        tam: "கதவு"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "open",
                        tam: "திறந்திருக்கிறது"
                    }],
                    tamilMeaning: "கதவு திறந்திருக்கிறது.",
                    tips: "'Open' is an adjective here. Compare: 'The door is open' (state) vs 'Open the door' (command/imperative)."
                },
                {
                    tamil: "நான் உங்களை நேசிக்கிறேன்.",
                    english: "I love you.",
                    grammar: "Subject 'I' + action verb 'love' + object 'you'. Simple present tense expressing a permanent feeling.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "love",
                        tam: "நேசிக்கிறேன்"
                    }, {
                        eng: "you",
                        tam: "உங்களை/உன்னை"
                    }],
                    tamilMeaning: "நான் உங்களை நேசிக்கிறேன்.",
                    tips: "Stative verbs (love, like, know, understand) rarely use -ing. Avoid 'I am loving you'."
                },
                {
                    tamil: "இல்லம் பெரியது.",
                    english: "The house is big.",
                    grammar: "Subject 'The house' + 'is' + predicate adjective 'big'. Describes a permanent characteristic.",
                    wordMeanings: [{
                        eng: "The house",
                        tam: "இல்லம்/வீடு"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "big",
                        tam: "பெரியது"
                    }],
                    tamilMeaning: "வீடு பெரியது.",
                    tips: "Use 'the' when referring to a specific, known thing. Use 'a/an' for something first mentioned or not specific."
                },
                {
                    tamil: "அவள் பாடம் படிக்கிறாள்.",
                    english: "She is studying.",
                    grammar: "'She' (singular) + 'is' + 'studying' (study → studyi-ng, drop 'y', add 'ing'? No, 'studying' = study + ing, keep 'y').",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is studying",
                        tam: "படிக்கிறாள்"
                    }],
                    tamilMeaning: "அவள் படிக்கிறாள்.",
                    tips: "For verbs ending in consonant+y: study→studying (keep y). But: lie→lying (remove ie, add ying)."
                },
                {
                    tamil: "நாங்கள் நண்பர்கள்.",
                    english: "We are friends.",
                    grammar: "'We' (first person plural) + 'are' + plural noun 'friends'. No article before plural nouns used in a general sense.",
                    wordMeanings: [{
                        eng: "We",
                        tam: "நாங்கள்"
                    }, {
                        eng: "are",
                        tam: "இருக்கிறோம்"
                    }, {
                        eng: "friends",
                        tam: "நண்பர்கள்"
                    }],
                    tamilMeaning: "நாங்கள் நண்பர்கள்.",
                    tips: "Plural nouns used generally need no article: We are friends (not 'the friends')."
                },
                {
                    tamil: "சூரியன் கிழக்கில் உதிக்கிறது.",
                    english: "The sun rises in the east.",
                    grammar: "Simple present for universal truths/habits. 'The sun' (singular) → 'rises' (add -s). 'in the east' is a prepositional phrase showing direction.",
                    wordMeanings: [{
                        eng: "The sun",
                        tam: "சூரியன்"
                    }, {
                        eng: "rises",
                        tam: "உதிக்கிறது"
                    }, {
                        eng: "in the east",
                        tam: "கிழக்கில்"
                    }],
                    tamilMeaning: "சூரியன் கிழக்கே உதிக்கிறது.",
                    tips: "Scientific facts and universal truths always use simple present tense even when talking about them."
                },
                {
                    tamil: "அது ஒரு பூனை.",
                    english: "It is a cat.",
                    grammar: "'It' (third person singular neuter) + 'is' + 'a cat'. 'A' is used before 'cat' which starts with a consonant sound.",
                    wordMeanings: [{
                        eng: "It",
                        tam: "அது"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "a cat",
                        tam: "ஒரு பூனை"
                    }],
                    tamilMeaning: "அது ஒரு பூனை.",
                    tips: "'A' before consonant sounds, 'an' before vowel sounds: a cat, an orange."
                },
                {
                    tamil: "நான் வீட்டில் இருக்கிறேன்.",
                    english: "I am at home.",
                    grammar: "'I' + 'am' + prepositional phrase 'at home'. 'At' indicates location (at home, at school, at work).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "at home",
                        tam: "வீட்டில்"
                    }],
                    tamilMeaning: "நான் வீட்டில் இருக்கிறேன்.",
                    tips: "Location prepositions: at (specific point), in (inside), on (surface). At home / in the room / on the table."
                },
                {
                    tamil: "அவர் நடக்கிறார்.",
                    english: "He is walking.",
                    grammar: "Present continuous: 'He' + 'is' + 'walking' (walk + ing). Describes an action happening right now.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is walking",
                        tam: "நடக்கிறார்"
                    }],
                    tamilMeaning: "அவர் நடக்கிறார்.",
                    tips: "Present continuous = is/am/are + verb-ing. Used for actions happening at the moment of speaking."
                },
                {
                    tamil: "நான் காபி குடிக்கிறேன்.",
                    english: "I am drinking coffee.",
                    grammar: "Present continuous with 'am'. 'Coffee' is an uncountable noun, used without an article in general sense.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am drinking",
                        tam: "குடிக்கிறேன்"
                    }, {
                        eng: "coffee",
                        tam: "காபி"
                    }],
                    tamilMeaning: "நான் காபி குடிக்கிறேன்.",
                    tips: "Drink is used for liquids. Don't say 'eating coffee'. Say 'drinking coffee'."
                },
                {
                    tamil: "குழந்தை அழுகிறது.",
                    english: "The baby is crying.",
                    grammar: "'The baby' (singular, definite) + 'is' + 'crying' (cry + ing, but 'crying' not 'criing'—just add ing to 'cry').",
                    wordMeanings: [{
                        eng: "The baby",
                        tam: "குழந்தை"
                    }, {
                        eng: "is crying",
                        tam: "அழுகிறது"
                    }],
                    tamilMeaning: "குழந்தை அழுகிறது.",
                    tips: "'The' is used when referring to a specific, known baby. Without 'the', it would be vague."
                },
                {
                    tamil: "அவன் மகிழ்ச்சியாக இருக்கிறான்.",
                    english: "He is happy.",
                    grammar: "'He' + 'is' + adjective 'happy'. Adjective comes after a linking verb (predicate adjective), not before a noun.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவன்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறான்"
                    }, {
                        eng: "happy",
                        tam: "மகிழ்ச்சியாக"
                    }],
                    tamilMeaning: "அவன் மகிழ்ச்சியாக இருக்கிறான்.",
                    tips: "Predicate adjective: 'He is happy' vs Attributive adjective: 'He is a happy boy'."
                },
                {
                    tamil: "நான் ஐந்து மணிக்கு எழுகிறேன்.",
                    english: "I wake up at five o'clock.",
                    grammar: "Simple present for daily routines. 'at five o'clock' = time expression. 'wake up' is a phrasal verb.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "wake up",
                        tam: "எழுகிறேன்"
                    }, {
                        eng: "at five o'clock",
                        tam: "ஐந்து மணிக்கு"
                    }],
                    tamilMeaning: "நான் ஐந்து மணிக்கு எழுகிறேன்.",
                    tips: "Use 'at' for specific times. Wake up = to stop sleeping; Get up = to leave the bed."
                },
                {
                    tamil: "மலர்கள் மணக்கின்றன.",
                    english: "The flowers smell nice.",
                    grammar: "'The flowers' (plural) + 'smell' (no -s for plural) + adjective 'nice'. 'Smell' is a linking verb here.",
                    wordMeanings: [{
                        eng: "The flowers",
                        tam: "மலர்கள்"
                    }, {
                        eng: "smell",
                        tam: "மணக்கின்றன"
                    }, {
                        eng: "nice",
                        tam: "நல்லாக/இனிமையாக"
                    }],
                    tamilMeaning: "மலர்கள் நல்ல மணம் கொண்டிருக்கின்றன.",
                    tips: "Sensory linking verbs (smell, taste, feel, look, sound) are followed by adjectives, not adverbs."
                },
                {
                    tamil: "நான் தமிழ் பேசுகிறேன்.",
                    english: "I speak Tamil.",
                    grammar: "Simple present for a skill or habit. 'I' + 'speak' (no -s) + 'Tamil' (proper noun, no article).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "speak",
                        tam: "பேசுகிறேன்"
                    }, {
                        eng: "Tamil",
                        tam: "தமிழ்"
                    }],
                    tamilMeaning: "நான் தமிழ் பேசுகிறேன்.",
                    tips: "Language names are proper nouns and are always capitalized: Tamil, English, Hindi."
                },
                {
                    tamil: "அவர்கள் பள்ளிக்கு செல்கிறார்கள்.",
                    english: "They are going to school.",
                    grammar: "'They' + 'are going' (present continuous) + 'to school'. 'to school' is prepositional phrase of direction.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "are going",
                        tam: "செல்கிறார்கள்"
                    }, {
                        eng: "to school",
                        tam: "பள்ளிக்கு"
                    }],
                    tamilMeaning: "அவர்கள் பள்ளிக்கு செல்கிறார்கள்.",
                    tips: "'Go to school/work/hospital' — no 'the' for regular institutional visits."
                },
                {
                    tamil: "இது சுவையாக உள்ளது.",
                    english: "It is delicious.",
                    grammar: "'It' + linking verb 'is' + predicate adjective 'delicious'. Short and natural for describing food taste.",
                    wordMeanings: [{
                        eng: "It",
                        tam: "இது"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "delicious",
                        tam: "சுவையாக"
                    }],
                    tamilMeaning: "இது சுவையாக இருக்கிறது.",
                    tips: "Alternatives: yummy (informal), tasty, flavorful. 'Delicious' is a strong, positive adjective for food."
                },
                {
                    tamil: "நான் நாளை வருவேன்.",
                    english: "I will come tomorrow.",
                    grammar: "Simple future: subject + will + base verb. 'will' is the modal auxiliary. 'tomorrow' is a future time adverb.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "will come",
                        tam: "வருவேன்"
                    }, {
                        eng: "tomorrow",
                        tam: "நாளை"
                    }],
                    tamilMeaning: "நான் நாளை வருவேன்.",
                    tips: "Will + base verb (no -s, no -ing). 'Tomorrow' always describes future. Never say 'will came'."
                },
                {
                    tamil: "என் அம்மா சமைக்கிறாள்.",
                    english: "My mother is cooking.",
                    grammar: "Possessive 'My' + noun 'mother' form the subject. Present continuous: 'is cooking'. 'cook + ing = cooking'.",
                    wordMeanings: [{
                        eng: "My",
                        tam: "என்"
                    }, {
                        eng: "mother",
                        tam: "அம்மா"
                    }, {
                        eng: "is cooking",
                        tam: "சமைக்கிறாள்"
                    }],
                    tamilMeaning: "என் அம்மா சமைக்கிறாள்.",
                    tips: "Mother, father, sister, brother — family words don't need 'the' when used with possessives (my mother)."
                },
                {
                    tamil: "அவன் கோபமாக உள்ளான்.",
                    english: "He is angry.",
                    grammar: "Subject + linking verb + adjective. 'angry' is the predicate adjective describing his emotional state.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவன்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறான்"
                    }, {
                        eng: "angry",
                        tam: "கோபமாக"
                    }],
                    tamilMeaning: "அவன் கோபமாக இருக்கிறான்.",
                    tips: "Emotional adjectives: happy, sad, angry, tired, excited, nervous — always used after linking verbs."
                },
                {
                    tamil: "நான் ஒரு புத்தகம் படிக்கிறேன்.",
                    english: "I am reading a book.",
                    grammar: "Present continuous: 'I am reading'. 'a book' = indefinite article + noun (one unspecified book).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am reading",
                        tam: "படிக்கிறேன்"
                    }, {
                        eng: "a book",
                        tam: "ஒரு புத்தகம்"
                    }],
                    tamilMeaning: "நான் ஒரு புத்தகம் படிக்கிறேன்.",
                    tips: "'a book' = any one book (indefinite). 'the book' = a specific, known book."
                },
                {
                    tamil: "வீடு சுத்தமாக உள்ளது.",
                    english: "The house is clean.",
                    grammar: "'The house' (specific) + 'is' + adjective 'clean'. Describes the current state of the house.",
                    wordMeanings: [{
                        eng: "The house",
                        tam: "வீடு"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "clean",
                        tam: "சுத்தமாக"
                    }],
                    tamilMeaning: "வீடு சுத்தமாக இருக்கிறது.",
                    tips: "Antonym of clean is dirty. Other state adjectives: empty/full, open/closed, hot/cold."
                },
                {
                    tamil: "குழந்தைகள் விளையாடுகிறார்கள்.",
                    english: "The children are playing.",
                    grammar: "'The children' (irregular plural of 'child') + 'are' + 'playing'. Irregular plural: child→children.",
                    wordMeanings: [{
                        eng: "The children",
                        tam: "குழந்தைகள்"
                    }, {
                        eng: "are playing",
                        tam: "விளையாடுகிறார்கள்"
                    }],
                    tamilMeaning: "குழந்தைகள் விளையாடுகிறார்கள்.",
                    tips: "Irregular plurals: child→children, man→men, woman→women, mouse→mice, tooth→teeth."
                },
                {
                    tamil: "அவள் அழுகிறாள்.",
                    english: "She is crying.",
                    grammar: "Present continuous: 'She' + 'is' + 'crying'. Verb 'cry' ends in consonant+y, so just add -ing: crying (not criing).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is crying",
                        tam: "அழுகிறாள்"
                    }],
                    tamilMeaning: "அவள் அழுகிறாள்.",
                    tips: "When adding -ing to verbs: run→running (double consonant), swim→swimming, but walk→walking (no doubling)."
                },
                {
                    tamil: "இங்கே வா.",
                    english: "Come here.",
                    grammar: "Imperative sentence: no subject needed. 'Come' is the base form used as a command. 'here' is an adverb of place.",
                    wordMeanings: [{
                        eng: "Come",
                        tam: "வா"
                    }, {
                        eng: "here",
                        tam: "இங்கே"
                    }],
                    tamilMeaning: "இங்கே வா.",
                    tips: "Imperative sentences express commands, requests, or instructions. The subject 'you' is implied."
                },
                {
                    tamil: "அவர் மருத்துவர்.",
                    english: "He is a doctor.",
                    grammar: "Subject 'He' + linking verb 'is' + indefinite article 'a' + profession 'doctor'. Career/profession needs 'a/an'.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "a doctor",
                        tam: "ஒரு மருத்துவர்"
                    }],
                    tamilMeaning: "அவர் ஒரு மருத்துவர்.",
                    tips: "'A doctor' vs 'The doctor': 'He is a doctor' (profession in general), 'The doctor is here' (specific person)."
                },
                {
                    tamil: "கோழி முட்டையிடுகிறது.",
                    english: "The hen lays eggs.",
                    grammar: "Simple present for habitual action. 'The hen' (singular) → 'lays' (add -s). 'eggs' = plural direct object.",
                    wordMeanings: [{
                        eng: "The hen",
                        tam: "கோழி"
                    }, {
                        eng: "lays",
                        tam: "இடுகிறது"
                    }, {
                        eng: "eggs",
                        tam: "முட்டைகள்"
                    }],
                    tamilMeaning: "கோழி முட்டைகளிடுகிறது.",
                    tips: "He/She/It + verb+s in simple present. Lay→lays, play→plays, go→goes."
                },
                {
                    tamil: "நாங்கள் சாப்பிடுகிறோம்.",
                    english: "We are eating.",
                    grammar: "'We' (plural) + 'are' + 'eating'. Present continuous for ongoing action.",
                    wordMeanings: [{
                        eng: "We",
                        tam: "நாங்கள்"
                    }, {
                        eng: "are eating",
                        tam: "சாப்பிடுகிறோம்"
                    }],
                    tamilMeaning: "நாங்கள் சாப்பிடுகிறோம்.",
                    tips: "'Eat' is a transitive verb but can be used without an object: We are eating (intransitive use)."
                },
                {
                    tamil: "அவர் தினமும் நடக்கிறார்.",
                    english: "He walks every day.",
                    grammar: "Simple present for routine habit. 'He' + 'walks' (add -s) + 'every day' (frequency adverb).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "walks",
                        tam: "நடக்கிறார்"
                    }, {
                        eng: "every day",
                        tam: "தினமும்"
                    }],
                    tamilMeaning: "அவர் தினமும் நடக்கிறார்.",
                    tips: "Frequency adverbs: always, usually, often, sometimes, rarely, never. Place them before the main verb."
                },
                {
                    tamil: "கடல் ஆழமாக உள்ளது.",
                    english: "The sea is deep.",
                    grammar: "'The sea' + 'is' + adjective 'deep'. 'The' is used because there is typically one known sea in context.",
                    wordMeanings: [{
                        eng: "The sea",
                        tam: "கடல்"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "deep",
                        tam: "ஆழமாக"
                    }],
                    tamilMeaning: "கடல் ஆழமாக இருக்கிறது.",
                    tips: "Antonyms: deep↔shallow, high↔low, long↔short, wide↔narrow."
                },
                {
                    tamil: "அவர்களுக்கு பசிக்கிறது.",
                    english: "They are hungry.",
                    grammar: "Subject 'They' + linking verb 'are' + adjective 'hungry'. Describes physical sensation/state.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "are",
                        tam: "இருக்கிறார்கள்"
                    }, {
                        eng: "hungry",
                        tam: "பசியாக"
                    }],
                    tamilMeaning: "அவர்களுக்கு பசிக்கிறது.",
                    tips: "Body sensation adjectives: hungry, thirsty, tired, sleepy, sick — used with to be verbs."
                },
                {
                    tamil: "நான் ஒரு பாடல் பாடுகிறேன்.",
                    english: "I am singing a song.",
                    grammar: "Present continuous with 'am'. 'a song' is the direct object. Sing + ing = singing.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am singing",
                        tam: "பாடுகிறேன்"
                    }, {
                        eng: "a song",
                        tam: "ஒரு பாடல்"
                    }],
                    tamilMeaning: "நான் ஒரு பாடல் பாடுகிறேன்.",
                    tips: "'Sing a song' is a common collocation. Collocations are word pairs that naturally go together."
                },
                {
                    tamil: "அவள் ஒரு செவிலியர்.",
                    english: "She is a nurse.",
                    grammar: "'She' + 'is' + 'a nurse'. Article 'a' before 'nurse' (starts with consonant sound).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "a nurse",
                        tam: "ஒரு செவிலியர்"
                    }],
                    tamilMeaning: "அவள் ஒரு செவிலியர்.",
                    tips: "'An' before vowel sounds: an engineer, an umbrella, an honest man (h is silent)."
                },
                {
                    tamil: "மரம் உயரமாக உள்ளது.",
                    english: "The tree is tall.",
                    grammar: "'The tree' + 'is' + predicate adjective 'tall'. Simple descriptive sentence.",
                    wordMeanings: [{
                        eng: "The tree",
                        tam: "மரம்"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "tall",
                        tam: "உயரமாக"
                    }],
                    tamilMeaning: "மரம் உயரமாக இருக்கிறது.",
                    tips: "'Tall' is used for people, trees, buildings. 'High' is used for abstract or non-living heights (high price)."
                },
                {
                    tamil: "அவன் கிரிக்கெட் விளையாடுகிறான்.",
                    english: "He is playing cricket.",
                    grammar: "Present continuous: 'He is playing'. 'cricket' is the direct object — no article needed for sport names.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவன்"
                    }, {
                        eng: "is playing",
                        tam: "விளையாடுகிறான்"
                    }, {
                        eng: "cricket",
                        tam: "கிரிக்கெட்"
                    }],
                    tamilMeaning: "அவன் கிரிக்கெட் விளையாடுகிறான்.",
                    tips: "Sports and games don't take articles: play cricket, play football, play chess (not 'play the cricket')."
                },
                {
                    tamil: "இன்று திங்கள்கிழமை.",
                    english: "Today is Monday.",
                    grammar: "'Today' as subject + linking verb 'is' + proper noun 'Monday'. Days of the week are always capitalized.",
                    wordMeanings: [{
                        eng: "Today",
                        tam: "இன்று"
                    }, {
                        eng: "is",
                        tam: "ஆகும்"
                    }, {
                        eng: "Monday",
                        tam: "திங்கள்கிழமை"
                    }],
                    tamilMeaning: "இன்று திங்கள்கிழமை.",
                    tips: "Days: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday — always capitalize."
                },
                {
                    tamil: "அவர் மெதுவாக பேசுகிறார்.",
                    english: "He speaks slowly.",
                    grammar: "Simple present: 'He speaks' (add -s). 'slowly' is an adverb modifying the verb 'speaks'. Adverb = adjective + ly.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "speaks",
                        tam: "பேசுகிறார்"
                    }, {
                        eng: "slowly",
                        tam: "மெதுவாக"
                    }],
                    tamilMeaning: "அவர் மெதுவாக பேசுகிறார்.",
                    tips: "Adverbs modify verbs: speaks slowly, runs fast, thinks clearly. Most adverbs are formed by adding -ly to adjectives."
                },
                {
                    tamil: "நான் ஆங்கிலம் கற்றுக்கொள்கிறேன்.",
                    english: "I am learning English.",
                    grammar: "Present continuous: 'I am learning'. 'English' = proper noun (no article). Learning = an ongoing process.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am learning",
                        tam: "கற்றுக்கொள்கிறேன்"
                    }, {
                        eng: "English",
                        tam: "ஆங்கிலம்"
                    }],
                    tamilMeaning: "நான் ஆங்கிலம் கற்றுக்கொள்கிறேன்.",
                    tips: "'Learn' is the process; 'study' is the effort. Both can be used here but 'learn' implies gaining knowledge."
                },
                {
                    tamil: "என் அப்பா வேலை செய்கிறார்.",
                    english: "My father is working.",
                    grammar: "'My father' (possessive + noun) + 'is working'. Work + ing = working.",
                    wordMeanings: [{
                        eng: "My father",
                        tam: "என் அப்பா"
                    }, {
                        eng: "is working",
                        tam: "வேலை செய்கிறார்"
                    }],
                    tamilMeaning: "என் அப்பா வேலை செய்கிறார்.",
                    tips: "'My father' not 'the father' — possessives already make the noun definite, so 'the' is unnecessary."
                },
                {
                    tamil: "நாய் குரைக்கிறது.",
                    english: "The dog is barking.",
                    grammar: "'The dog' (singular) + 'is barking'. bark + ing = barking. Present continuous for ongoing sound.",
                    wordMeanings: [{
                        eng: "The dog",
                        tam: "நாய்"
                    }, {
                        eng: "is barking",
                        tam: "குரைக்கிறது"
                    }],
                    tamilMeaning: "நாய் குரைக்கிறது.",
                    tips: "Animal sounds: dog barks, cat meows, cow moos, lion roars, bird chirps."
                },
                {
                    tamil: "அவள் புத்திசாலி.",
                    english: "She is intelligent.",
                    grammar: "'She' + 'is' + adjective 'intelligent'. A three-word sentence that is complete and grammatically correct.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "intelligent",
                        tam: "புத்திசாலி"
                    }],
                    tamilMeaning: "அவள் புத்திசாலியாக இருக்கிறாள்.",
                    tips: "Synonyms: smart, clever, bright, sharp. 'Intelligent' is more formal than 'smart'."
                },
                {
                    tamil: "நான் சந்தோஷமாக இருக்கிறேன்.",
                    english: "I am happy.",
                    grammar: "'I' + 'am' + adjective 'happy'. Simple present expressing current emotional state.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "happy",
                        tam: "சந்தோஷமாக"
                    }],
                    tamilMeaning: "நான் சந்தோஷமாக இருக்கிறேன்.",
                    tips: "Synonyms of happy: joyful, cheerful, pleased, delighted, content. Antonym: sad, unhappy."
                },
                {
                    tamil: "அவர் ஓடுகிறார்.",
                    english: "He is running.",
                    grammar: "Present continuous: 'He' + 'is' + 'running'. run + n + ing = running (double the final consonant for short vowel verbs).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is running",
                        tam: "ஓடுகிறார்"
                    }],
                    tamilMeaning: "அவர் ஓடுகிறார்.",
                    tips: "Doubling rule: short vowel + single consonant at end → double before -ing. run→running, sit→sitting, hit→hitting."
                },
                {
                    tamil: "குளிர் காலம் ஆரம்பமாகிறது.",
                    english: "Winter is beginning.",
                    grammar: "'Winter' + 'is beginning'. begin + n + ing = beginning. Treat as present continuous for a process starting now.",
                    wordMeanings: [{
                        eng: "Winter",
                        tam: "குளிர் காலம்"
                    }, {
                        eng: "is beginning",
                        tam: "ஆரம்பமாகிறது"
                    }],
                    tamilMeaning: "குளிர் காலம் ஆரம்பமாகிறது.",
                    tips: "Seasons don't take articles: winter, summer, spring, autumn — unless specific: the winter of 1945."
                },
                {
                    tamil: "பூச்சி பூவில் அமர்ந்துள்ளது.",
                    english: "The bee is sitting on the flower.",
                    grammar: "'The bee' + 'is sitting' + 'on the flower'. 'on' is the correct preposition for a surface.",
                    wordMeanings: [{
                        eng: "The bee",
                        tam: "பூச்சி"
                    }, {
                        eng: "is sitting on",
                        tam: "அமர்ந்துள்ளது"
                    }, {
                        eng: "the flower",
                        tam: "பூவில்"
                    }],
                    tamilMeaning: "தேனீ பூவின் மீது அமர்ந்துள்ளது.",
                    tips: "Prepositions of place: on (surface), in (inside), under (below), above (higher), beside (next to)."
                },
                {
                    tamil: "அந்த குழந்தை சிரிக்கிறது.",
                    english: "That child is laughing.",
                    grammar: "'That' (demonstrative for distant object) + 'child' + 'is laughing'. laugh + ing = laughing.",
                    wordMeanings: [{
                        eng: "That",
                        tam: "அந்த"
                    }, {
                        eng: "child",
                        tam: "குழந்தை"
                    }, {
                        eng: "is laughing",
                        tam: "சிரிக்கிறது"
                    }],
                    tamilMeaning: "அந்த குழந்தை சிரிக்கிறது.",
                    tips: "'This child' (nearby) vs 'That child' (distant). This/These = near; That/Those = far."
                },
                {
                    tamil: "அவர்கள் சாப்பிட்டார்கள்.",
                    english: "They ate.",
                    grammar: "Simple past: 'They' + past form of 'eat' = 'ate'. Irregular verb. No auxiliary needed in simple past.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "ate",
                        tam: "சாப்பிட்டார்கள்"
                    }],
                    tamilMeaning: "அவர்கள் சாப்பிட்டார்கள்.",
                    tips: "Regular past: add -ed (played, walked). Irregular past: eat→ate, go→went, see→saw, come→came."
                },
                {
                    tamil: "நான் அலுப்பாக இருக்கிறேன்.",
                    english: "I am tired.",
                    grammar: "'I' + 'am' + adjective 'tired'. 'Tired' is a past participle used as an adjective here.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "tired",
                        tam: "அலுப்பாக"
                    }],
                    tamilMeaning: "நான் சோர்வாக இருக்கிறேன்.",
                    tips: "Tired, excited, bored, surprised, interested — these adjectives come from past participles of verbs."
                },
                {
                    tamil: "வெளிசம் தெருவில் விளையாடுகிறான்.",
                    english: "The boy is playing in the street.",
                    grammar: "'The boy' + 'is playing' + 'in the street'. 'in the street' = prepositional phrase of place.",
                    wordMeanings: [{
                        eng: "The boy",
                        tam: "சிறுவன்"
                    }, {
                        eng: "is playing",
                        tam: "விளையாடுகிறான்"
                    }, {
                        eng: "in the street",
                        tam: "தெருவில்"
                    }],
                    tamilMeaning: "சிறுவன் தெருவில் விளையாடுகிறான்.",
                    tips: "'In the street' vs 'on the street' — both are used, but 'in the street' is more British, 'on the street' more American."
                },
                {
                    tamil: "அவள் ஒரு வடிவமான பெண்.",
                    english: "She is a beautiful girl.",
                    grammar: "'She' + 'is' + 'a beautiful girl'. Here 'beautiful' is an attributive adjective (before the noun girl).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "a beautiful girl",
                        tam: "ஒரு அழகான பெண்"
                    }],
                    tamilMeaning: "அவள் ஒரு அழகான பெண்.",
                    tips: "Attributive adjective (before noun): a beautiful girl. Predicate adjective (after verb): She is beautiful."
                },
                {
                    tamil: "என் கை வலிக்கிறது.",
                    english: "My hand is hurting.",
                    grammar: "'My hand' (possessive + noun) + 'is hurting'. present continuous for ongoing pain.",
                    wordMeanings: [{
                        eng: "My",
                        tam: "என்"
                    }, {
                        eng: "hand",
                        tam: "கை"
                    }, {
                        eng: "is hurting",
                        tam: "வலிக்கிறது"
                    }],
                    tamilMeaning: "என் கை வலிக்கிறது.",
                    tips: "'Hurt' can mean physical pain (My hand hurts) or emotional pain (Her words hurt me)."
                },
                {
                    tamil: "வானம் மேகமூட்டமாக உள்ளது.",
                    english: "The sky is cloudy.",
                    grammar: "'The sky' + 'is' + adjective 'cloudy'. Weather adjectives: cloudy, sunny, windy, foggy — all add -y to a noun.",
                    wordMeanings: [{
                        eng: "The sky",
                        tam: "வானம்"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "cloudy",
                        tam: "மேகமூட்டமாக"
                    }],
                    tamilMeaning: "வானம் மேகமூட்டமாக இருக்கிறது.",
                    tips: "Weather adjectives formed by adding -y: cloud→cloudy, sun→sunny, wind→windy, fog→foggy."
                },
                {
                    tamil: "அவர் ஒரு நல்ல மனிதர்.",
                    english: "He is a good man.",
                    grammar: "'He' + 'is' + 'a good man'. 'good' is an attributive adjective modifying 'man'.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "a good man",
                        tam: "ஒரு நல்ல மனிதர்"
                    }],
                    tamilMeaning: "அவர் ஒரு நல்ல மனிதர்.",
                    tips: "'Good' describes quality. Comparative: better. Superlative: best. Good→Better→Best."
                },
                {
                    tamil: "பூக்கள் சிவப்பு.",
                    english: "The flowers are red.",
                    grammar: "'The flowers' (plural) + 'are' + adjective 'red'. Colours used as predicate adjectives.",
                    wordMeanings: [{
                        eng: "The flowers",
                        tam: "பூக்கள்"
                    }, {
                        eng: "are",
                        tam: "உள்ளன"
                    }, {
                        eng: "red",
                        tam: "சிவப்பு"
                    }],
                    tamilMeaning: "பூக்கள் சிவப்பாக இருக்கின்றன.",
                    tips: "Colours: red, blue, green, yellow, black, white, orange, purple. Always lowercase unless starting a sentence."
                },
                {
                    tamil: "அவர் சோர்வடைந்திருக்கிறார்.",
                    english: "He is exhausted.",
                    grammar: "'He' + 'is' + adjective 'exhausted'. 'Exhausted' is stronger than 'tired' — completely drained of energy.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "exhausted",
                        tam: "சோர்வடைந்திருக்கிறார்"
                    }],
                    tamilMeaning: "அவர் மிகவும் சோர்வடைந்திருக்கிறார்.",
                    tips: "Intensity: tired < exhausted. Other pairs: hot/boiling, cold/freezing, good/excellent."
                },
                {
                    tamil: "இந்த வழி நேரடியானது.",
                    english: "This road is straight.",
                    grammar: "Demonstrative 'This' + noun 'road' + 'is' + adjective 'straight'.",
                    wordMeanings: [{
                        eng: "This road",
                        tam: "இந்த வழி"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "straight",
                        tam: "நேரடியானது"
                    }],
                    tamilMeaning: "இந்த சாலை நேரடியாக உள்ளது.",
                    tips: "'Straight' can also mean honest (He is a straight talker). Context determines the meaning."
                },
                {
                    tamil: "பிள்ளைகள் சத்தமாக பேசுகிறார்கள்.",
                    english: "The children are speaking loudly.",
                    grammar: "'The children' (plural) + 'are speaking' + adverb 'loudly'. Adverbs modify verbs.",
                    wordMeanings: [{
                        eng: "The children",
                        tam: "பிள்ளைகள்"
                    }, {
                        eng: "are speaking",
                        tam: "பேசுகிறார்கள்"
                    }, {
                        eng: "loudly",
                        tam: "சத்தமாக"
                    }],
                    tamilMeaning: "குழந்தைகள் சத்தமாகப் பேசுகிறார்கள்.",
                    tips: "Speak + loudly. Quietly is the antonym. Adverbs of manner typically end in -ly."
                },
                {
                    tamil: "நான் ஓய்வெடுக்கிறேன்.",
                    english: "I am resting.",
                    grammar: "Present continuous: 'I am' + 'resting'. rest + ing = resting (no doubling—ends in t, not a short vowel+single consonant).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am resting",
                        tam: "ஓய்வெடுக்கிறேன்"
                    }],
                    tamilMeaning: "நான் ஓய்வெடுக்கிறேன்.",
                    tips: "'Rest' means to relax and recover. 'Take rest' is also common in Indian English."
                },
                {
                    tamil: "கால்பந்து ஒரு விளையாட்டு.",
                    english: "Football is a sport.",
                    grammar: "'Football' (uncountable, no article in general sense) + 'is' + 'a sport'. Defines what football is.",
                    wordMeanings: [{
                        eng: "Football",
                        tam: "கால்பந்து"
                    }, {
                        eng: "is",
                        tam: "ஆகும்"
                    }, {
                        eng: "a sport",
                        tam: "ஒரு விளையாட்டு"
                    }],
                    tamilMeaning: "கால்பந்து ஒரு விளையாட்டு.",
                    tips: "Categories/definitions use 'a/an': Football is a sport. Chess is a game. English is a language."
                },
                {
                    tamil: "நான் நம்பிக்கையாக இருக்கிறேன்.",
                    english: "I am confident.",
                    grammar: "'I am' + adjective 'confident'. Simple present expressing personal quality.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "confident",
                        tam: "நம்பிக்கையாக"
                    }],
                    tamilMeaning: "நான் நம்பிக்கையுடன் இருக்கிறேன்.",
                    tips: "Confident = certain about your abilities. Synonyms: self-assured, bold, positive."
                },
                {
                    tamil: "மாடு புல் தின்கிறது.",
                    english: "The cow is eating grass.",
                    grammar: "'The cow' (singular) + 'is eating' + 'grass' (uncountable, no article).",
                    wordMeanings: [{
                        eng: "The cow",
                        tam: "மாடு"
                    }, {
                        eng: "is eating",
                        tam: "தின்கிறது"
                    }, {
                        eng: "grass",
                        tam: "புல்"
                    }],
                    tamilMeaning: "மாடு புல் மேய்கிறது.",
                    tips: "Uncountable nouns: grass, rice, water, milk, sugar — no 'a/an', no plural form."
                },
                {
                    tamil: "நான் படம் வரைகிறேன்.",
                    english: "I am drawing a picture.",
                    grammar: "Present continuous: 'I am drawing'. 'a picture' = one unspecified picture.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am drawing",
                        tam: "வரைகிறேன்"
                    }, {
                        eng: "a picture",
                        tam: "படம்"
                    }],
                    tamilMeaning: "நான் ஒரு படம் வரைகிறேன்.",
                    tips: "Draw a picture / Paint a painting / Write a story — collocations with creative activities."
                },
                {
                    tamil: "வீட்டில் யாருமில்லை.",
                    english: "Nobody is at home.",
                    grammar: "'Nobody' (negative pronoun) + singular verb 'is'. Nobody = no person. Negative pronoun takes singular verb.",
                    wordMeanings: [{
                        eng: "Nobody",
                        tam: "யாருமில்லை"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "at home",
                        tam: "வீட்டில்"
                    }],
                    tamilMeaning: "வீட்டில் யாரும் இல்லை.",
                    tips: "Nobody/Everybody/Somebody/Anybody → always use singular verb (is, was, has)."
                },
                {
                    tamil: "அவள் வேகமாக ஓடுகிறாள்.",
                    english: "She runs fast.",
                    grammar: "Simple present: 'She runs' (add -s). 'fast' is an adverb here (not 'fastly'—'fast' is its own adverb form).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "runs",
                        tam: "ஓடுகிறாள்"
                    }, {
                        eng: "fast",
                        tam: "வேகமாக"
                    }],
                    tamilMeaning: "அவள் வேகமாக ஓடுகிறாள்.",
                    tips: "'Fast' is both adjective and adverb. Don't say 'fastly'. Compare: hard (adj/adv), early (adj/adv)."
                },
                {
                    tamil: "நான் ஒரு கடிதம் எழுதுகிறேன்.",
                    english: "I am writing a letter.",
                    grammar: "Present continuous: 'I am writing'. 'a letter' = one unspecified letter. Write + ing = writing (drop silent e).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am writing",
                        tam: "எழுதுகிறேன்"
                    }, {
                        eng: "a letter",
                        tam: "ஒரு கடிதம்"
                    }],
                    tamilMeaning: "நான் ஒரு கடிதம் எழுதுகிறேன்.",
                    tips: "Drop silent 'e' before -ing: write→writing, make→making, take→taking, give→giving."
                },
                {
                    tamil: "அது ஒரு நட்சத்திரம்.",
                    english: "It is a star.",
                    grammar: "'It' + 'is' + 'a star'. Simple identification sentence. 'a' before 'star' (consonant sound).",
                    wordMeanings: [{
                        eng: "It",
                        tam: "அது"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "a star",
                        tam: "ஒரு நட்சத்திரம்"
                    }],
                    tamilMeaning: "அது ஒரு நட்சத்திரம்.",
                    tips: "Identifying objects: 'It is a ___'. 'It is an ___' (before vowel sounds: an apple, an orange)."
                },
                {
                    tamil: "பழம் இனிப்பாக உள்ளது.",
                    english: "The fruit is sweet.",
                    grammar: "'The fruit' + 'is' + adjective 'sweet'. Taste adjectives: sweet, sour, bitter, spicy, salty.",
                    wordMeanings: [{
                        eng: "The fruit",
                        tam: "பழம்"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "sweet",
                        tam: "இனிப்பாக"
                    }],
                    tamilMeaning: "பழம் இனிமையாக இருக்கிறது.",
                    tips: "Taste adjectives: sweet (இனிப்பு), sour (புளிப்பு), bitter (கசப்பு), spicy (காரம்), salty (உப்பு)."
                },
                {
                    tamil: "தேர்வு நாளை உள்ளது.",
                    english: "The exam is tomorrow.",
                    grammar: "'The exam' (specific exam) + 'is' + time expression 'tomorrow'.",
                    wordMeanings: [{
                        eng: "The exam",
                        tam: "தேர்வு"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "tomorrow",
                        tam: "நாளை"
                    }],
                    tamilMeaning: "தேர்வு நாளை உள்ளது.",
                    tips: "'The exam' implies a specific exam both speaker and listener know about. 'An exam' would be less specific."
                },
                {
                    tamil: "என் சட்டை நீலமானது.",
                    english: "My shirt is blue.",
                    grammar: "Possessive 'My' + noun 'shirt' = subject. + 'is' + colour adjective 'blue'.",
                    wordMeanings: [{
                        eng: "My shirt",
                        tam: "என் சட்டை"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "blue",
                        tam: "நீலம்"
                    }],
                    tamilMeaning: "என் சட்டை நீல நிறமானது.",
                    tips: "Possessive adjective (my, your, his, her) makes a noun definite, so no article is needed."
                },
                {
                    tamil: "நான் சாலையில் நடக்கிறேன்.",
                    english: "I am walking on the road.",
                    grammar: "Present continuous + prepositional phrase. 'on the road' — 'on' for surfaces like roads, pavements.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am walking",
                        tam: "நடக்கிறேன்"
                    }, {
                        eng: "on the road",
                        tam: "சாலையில்"
                    }],
                    tamilMeaning: "நான் சாலையில் நடக்கிறேன்.",
                    tips: "'On the road' for walking. 'In the car' for being inside a vehicle."
                },
                {
                    tamil: "அவர்கள் நண்பர்களுடன் இருக்கிறார்கள்.",
                    english: "They are with their friends.",
                    grammar: "'They' + 'are' + prepositional phrase 'with their friends'. 'with' expresses companionship.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "are with",
                        tam: "உடன் இருக்கிறார்கள்"
                    }, {
                        eng: "their friends",
                        tam: "அவர்கள் நண்பர்கள்"
                    }],
                    tamilMeaning: "அவர்கள் அவர்கள் நண்பர்களுடன் இருக்கிறார்கள்.",
                    tips: "'With' indicates accompaniment. 'Their' matches plural pronoun 'They'."
                },
                {
                    tamil: "குழந்தை தூங்குகிறது.",
                    english: "The baby is sleeping.",
                    grammar: "'The baby' + 'is sleeping'. sleep + ing = sleeping. Present continuous for current action.",
                    wordMeanings: [{
                        eng: "The baby",
                        tam: "குழந்தை"
                    }, {
                        eng: "is sleeping",
                        tam: "தூங்குகிறது"
                    }],
                    tamilMeaning: "குழந்தை தூங்குகிறது.",
                    tips: "'Sleep' is an intransitive verb — it never takes a direct object. You can't 'sleep something'."
                },
                {
                    tamil: "நான் கணக்கு தெரியும்.",
                    english: "I know mathematics.",
                    grammar: "Simple present with stative verb 'know'. Know = stative verb, never used in -ing form for this meaning.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "know",
                        tam: "தெரியும்"
                    }, {
                        eng: "mathematics",
                        tam: "கணக்கு"
                    }],
                    tamilMeaning: "எனக்கு கணிதம் தெரியும்.",
                    tips: "Stative verbs: know, understand, believe, like, love, hate — don't use in continuous form."
                },
                {
                    tamil: "அவர் மிகவும் பிரபலமானவர்.",
                    english: "He is very famous.",
                    grammar: "'He is' + intensifier 'very' + adjective 'famous'. 'Very' amplifies the adjective.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "very famous",
                        tam: "மிகவும் பிரபலமானவர்"
                    }],
                    tamilMeaning: "அவர் மிகவும் பிரபலமானவர்.",
                    tips: "Intensifiers: very, quite, rather, extremely, incredibly. 'Very' is neutral; 'extremely' is stronger."
                },
                {
                    tamil: "நாங்கள் தமிழ்நாட்டில் வாழ்கிறோம்.",
                    english: "We live in Tamil Nadu.",
                    grammar: "Simple present for permanent/long-term situation. 'in Tamil Nadu' = prepositional phrase of place.",
                    wordMeanings: [{
                        eng: "We",
                        tam: "நாங்கள்"
                    }, {
                        eng: "live",
                        tam: "வாழ்கிறோம்"
                    }, {
                        eng: "in Tamil Nadu",
                        tam: "தமிழ்நாட்டில்"
                    }],
                    tamilMeaning: "நாங்கள் தமிழ்நாட்டில் வாழ்கிறோம்.",
                    tips: "'Live in' + country/city/state. Permanent residence uses simple present, not continuous."
                },
                {
                    tamil: "அவள் தினமும் தியானம் செய்கிறாள்.",
                    english: "She meditates every day.",
                    grammar: "Simple present for habit: 'She meditates' (add -s). 'every day' is a frequency adverb phrase.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "meditates",
                        tam: "தியானம் செய்கிறாள்"
                    }, {
                        eng: "every day",
                        tam: "தினமும்"
                    }],
                    tamilMeaning: "அவள் தினமும் தியானம் செய்கிறாள்.",
                    tips: "'Every day' (adverb phrase) vs 'everyday' (adjective, meaning ordinary): every day she meditates; an everyday task."
                },
                {
                    tamil: "மலர்கள் அழகாக உள்ளன.",
                    english: "The flowers are beautiful.",
                    grammar: "'The flowers' (plural) + 'are' + adjective 'beautiful'. Beauty adjective for plural subject.",
                    wordMeanings: [{
                        eng: "The flowers",
                        tam: "மலர்கள்"
                    }, {
                        eng: "are",
                        tam: "உள்ளன"
                    }, {
                        eng: "beautiful",
                        tam: "அழகாக"
                    }],
                    tamilMeaning: "மலர்கள் அழகாக இருக்கின்றன.",
                    tips: "Comparative: more beautiful (not beautifuller). Superlative: the most beautiful."
                },
                {
                    tamil: "குளம் குளிரானது.",
                    english: "The pond is cold.",
                    grammar: "'The pond' + 'is' + 'cold'. Simple present for a current temperature state.",
                    wordMeanings: [{
                        eng: "The pond",
                        tam: "குளம்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "cold",
                        tam: "குளிரானது"
                    }],
                    tamilMeaning: "குளம் குளிரானது.",
                    tips: "Temperature adjectives: hot, warm, cool, cold, freezing. 'Freezing' is the most extreme."
                },
                {
                    tamil: "இரவு இருட்டாக உள்ளது.",
                    english: "The night is dark.",
                    grammar: "'The night' (definite, specific night = tonight) + 'is' + adjective 'dark'.",
                    wordMeanings: [{
                        eng: "The night",
                        tam: "இரவு"
                    }, {
                        eng: "is",
                        tam: "உள்ளது"
                    }, {
                        eng: "dark",
                        tam: "இருட்டாக"
                    }],
                    tamilMeaning: "இரவு இருட்டாக இருக்கிறது.",
                    tips: "Antonyms: dark↔bright/light, day↔night, hot↔cold, tall↔short."
                },
                {
                    tamil: "அவர் ஒரு வீரன்.",
                    english: "He is a hero.",
                    grammar: "'He' + 'is' + 'a hero'. 'hero' starts with a consonant sound /h/, so use 'a' not 'an'.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "a hero",
                        tam: "ஒரு வீரன்"
                    }],
                    tamilMeaning: "அவர் ஒரு வீரன்.",
                    tips: "'A hero' not 'an hero'. The h in hero is pronounced, so use 'a'. But 'an hour' — h is silent."
                },
                {
                    tamil: "நான் பணியில் இருக்கிறேன்.",
                    english: "I am at work.",
                    grammar: "'I am' + prepositional phrase 'at work'. 'At work' means you are in your workplace/working.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am",
                        tam: "இருக்கிறேன்"
                    }, {
                        eng: "at work",
                        tam: "பணியில்"
                    }],
                    tamilMeaning: "நான் வேலையில் இருக்கிறேன்.",
                    tips: "Fixed expressions: at work, at home, at school, at university — no 'the' needed."
                },
                {
                    tamil: "கடை மூடியிருக்கிறது.",
                    english: "The shop is closed.",
                    grammar: "'The shop' + 'is closed'. 'closed' is a past participle used as an adjective (state).",
                    wordMeanings: [{
                        eng: "The shop",
                        tam: "கடை"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "closed",
                        tam: "மூடியிருக்கிறது"
                    }],
                    tamilMeaning: "கடை மூடியிருக்கிறது.",
                    tips: "'Closed' (adjective, state) vs 'The shop was closed by the owner' (passive, action)."
                },
                {
                    tamil: "இது என் பேனா.",
                    english: "This is my pen.",
                    grammar: "Demonstrative 'This' + 'is' + possessive 'my' + noun 'pen'. Identifying ownership of an object.",
                    wordMeanings: [{
                        eng: "This",
                        tam: "இது"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறது"
                    }, {
                        eng: "my pen",
                        tam: "என் பேனா"
                    }],
                    tamilMeaning: "இது என் பேனா.",
                    tips: "'This is my pen' (claim ownership). 'Is this my pen?' (question about ownership)."
                },
                {
                    tamil: "அவர் மிகவும் கடினமாக உழைக்கிறார்.",
                    english: "He works very hard.",
                    grammar: "Simple present for habit: 'He works'. 'very hard' = intensifier + adverb. 'hard' is its own adverb.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "works",
                        tam: "உழைக்கிறார்"
                    }, {
                        eng: "very hard",
                        tam: "மிகவும் கடினமாக"
                    }],
                    tamilMeaning: "அவர் மிகவும் கடினமாக உழைக்கிறார்.",
                    tips: "Don't say 'hardly' to mean 'a lot'. 'Hardly' means 'almost not'. He hardly works = he barely works."
                },
            ],

            medium: [{
                    tamil: "என்னால் நன்றாக நீந்த முடியும்.",
                    english: "I can swim well.",
                    grammar: "Modal verb 'can' expresses ability. 'can' + base verb 'swim'. 'well' is the adverb (not 'good', which is an adjective).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "என்னால்"
                    }, {
                        eng: "can swim",
                        tam: "நீந்த முடியும்"
                    }, {
                        eng: "well",
                        tam: "நன்றாக"
                    }],
                    tamilMeaning: "என்னால் நன்றாக நீந்த முடியும்.",
                    tips: "Use 'well' as an adverb (she dances well). 'Good' is an adjective (she is a good dancer). Never 'swim good'."
                },
                {
                    tamil: "அவர் நேற்று வரவில்லை.",
                    english: "He did not come yesterday.",
                    grammar: "Negative simple past: subject + did not + base verb. 'did not' = auxiliary for all subjects in past negative. 'yesterday' is a past time adverb.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "did not come",
                        tam: "வரவில்லை"
                    }, {
                        eng: "yesterday",
                        tam: "நேற்று"
                    }],
                    tamilMeaning: "அவர் நேற்று வரவில்லை.",
                    tips: "Past negative: did not (didn't) + base verb. Never 'He did not came'. The main verb stays in base form."
                },
                {
                    tamil: "நீங்கள் எப்போது வருவீர்கள்?",
                    english: "When will you come?",
                    grammar: "Wh-question in future: Wh-word + will + subject + base verb. 'When' asks about time.",
                    wordMeanings: [{
                        eng: "When",
                        tam: "எப்போது"
                    }, {
                        eng: "will you come",
                        tam: "வருவீர்கள்"
                    }],
                    tamilMeaning: "நீங்கள் எப்போது வருவீர்கள்?",
                    tips: "Wh-questions: When (time), Where (place), Who (person), What (thing), Why (reason), How (manner)."
                },
                {
                    tamil: "அவள் இரண்டு மணி நேரமாக படிக்கிறாள்.",
                    english: "She has been studying for two hours.",
                    grammar: "Present perfect continuous: has/have + been + verb-ing. Expresses an action that started in the past and is still continuing.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "has been studying",
                        tam: "படித்துக்கொண்டிருக்கிறாள்"
                    }, {
                        eng: "for two hours",
                        tam: "இரண்டு மணி நேரமாக"
                    }],
                    tamilMeaning: "அவள் இரண்டு மணி நேரமாக படிக்கிறாள்.",
                    tips: "For vs Since: 'for two hours' (duration), 'since morning' (starting point). Both used with perfect tenses."
                },
                {
                    tamil: "நான் இந்த நகரத்தில் பிறந்தேன்.",
                    english: "I was born in this city.",
                    grammar: "Passive voice in simple past: was + past participle 'born'. Birth events always use passive in English.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "was born",
                        tam: "பிறந்தேன்"
                    }, {
                        eng: "in this city",
                        tam: "இந்த நகரத்தில்"
                    }],
                    tamilMeaning: "நான் இந்த நகரத்தில் பிறந்தேன்.",
                    tips: "'Born' is always used in passive voice: I was born, She was born. Never 'I born'."
                },
                {
                    tamil: "அவர் ஒரு சுவாரஸ்யமான கதை சொன்னார்.",
                    english: "He told an interesting story.",
                    grammar: "Simple past: 'told' is irregular past of 'tell'. 'an interesting story' — 'an' before vowel sound /ɪ/ in 'interesting'.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "told",
                        tam: "சொன்னார்"
                    }, {
                        eng: "an interesting story",
                        tam: "ஒரு சுவாரஸ்யமான கதை"
                    }],
                    tamilMeaning: "அவர் ஒரு சுவாரஸ்யமான கதை சொன்னார்.",
                    tips: "Tell→told (irregular). 'Tell a story', 'tell a lie', 'tell the truth' — tell + noun is a common collocation."
                },
                {
                    tamil: "நான் இதற்கு முன் இங்கே வந்ததில்லை.",
                    english: "I have never been here before.",
                    grammar: "Present perfect: have + past participle. 'never' is a negative adverb. 'before' at the end reinforces past experience.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "have never been",
                        tam: "வந்ததில்லை"
                    }, {
                        eng: "here",
                        tam: "இங்கே"
                    }, {
                        eng: "before",
                        tam: "இதற்கு முன்"
                    }],
                    tamilMeaning: "நான் இதற்கு முன் இங்கே வந்ததில்லை.",
                    tips: "Present perfect for life experiences: I have never been, Have you ever visited, She has already eaten."
                },
                {
                    tamil: "அவர்கள் கடந்த ஆண்டு திருமணம் செய்தார்கள்.",
                    english: "They got married last year.",
                    grammar: "Simple past for a completed event in the past. 'got married' = phrasal verb for marriage. 'last year' = past time reference.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "got married",
                        tam: "திருமணம் செய்தார்கள்"
                    }, {
                        eng: "last year",
                        tam: "கடந்த ஆண்டு"
                    }],
                    tamilMeaning: "அவர்கள் கடந்த ஆண்டு திருமணம் செய்தார்கள்.",
                    tips: "'Get married' (the event) vs 'be married' (the state): They got married in 2023. They have been married for two years."
                },
                {
                    tamil: "மழை வந்தால் நான் வீட்டில் இருப்பேன்.",
                    english: "If it rains, I will stay at home.",
                    grammar: "First conditional: If + simple present, will + base verb. Describes a real future possibility.",
                    wordMeanings: [{
                        eng: "If it rains",
                        tam: "மழை வந்தால்"
                    }, {
                        eng: "I will stay",
                        tam: "நான் இருப்பேன்"
                    }, {
                        eng: "at home",
                        tam: "வீட்டில்"
                    }],
                    tamilMeaning: "மழை வந்தால் நான் வீட்டில் இருப்பேன்.",
                    tips: "First conditional = real/likely future. If + present simple, will + base verb. The if-clause can come first or second."
                },
                {
                    tamil: "அவள் மருத்துவராக ஆக விரும்புகிறாள்.",
                    english: "She wants to become a doctor.",
                    grammar: "'wants to' = modal-like expression of desire. 'to become' is an infinitive. Subject + want to + verb infinitive.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "wants to become",
                        tam: "ஆக விரும்புகிறாள்"
                    }, {
                        eng: "a doctor",
                        tam: "மருத்துவராக"
                    }],
                    tamilMeaning: "அவள் ஒரு மருத்துவராக ஆக விரும்புகிறாள்.",
                    tips: "Want + to + base verb: want to eat, want to go, want to become. Never 'want + -ing'."
                },
                {
                    tamil: "அவர் தினமும் ஏழு மணிக்கு எழுந்திருக்கிறார்.",
                    english: "He gets up at seven every morning.",
                    grammar: "Simple present for routine. 'gets up' = phrasal verb. 'at seven' = specific time. 'every morning' = frequency.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "gets up",
                        tam: "எழுந்திருக்கிறார்"
                    }, {
                        eng: "at seven",
                        tam: "ஏழு மணிக்கு"
                    }, {
                        eng: "every morning",
                        tam: "தினமும் காலையில்"
                    }],
                    tamilMeaning: "அவர் தினமும் காலை ஏழு மணிக்கு எழுந்திருக்கிறார்.",
                    tips: "Get up = leave the bed. Wake up = stop sleeping. Both are common in routines."
                },
                {
                    tamil: "நான் அந்த படம் ஏற்கனவே பார்த்தேன்.",
                    english: "I have already seen that movie.",
                    grammar: "Present perfect with 'already'. have + seen (irregular past participle of see). 'already' placed between have and past participle.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "have already seen",
                        tam: "ஏற்கனவே பார்த்தேன்"
                    }, {
                        eng: "that movie",
                        tam: "அந்த படம்"
                    }],
                    tamilMeaning: "நான் அந்த படத்தை ஏற்கனவே பார்த்தேன்.",
                    tips: "Present perfect for recent or life experience: already/yet/just/ever/never. 'yet' in negatives/questions."
                },
                {
                    tamil: "அவர் என்னிடம் பொய் சொன்னார்.",
                    english: "He lied to me.",
                    grammar: "Simple past: 'lied' (regular, lie→lied). 'to me' = prepositional phrase (indirect object with 'to').",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "lied",
                        tam: "பொய் சொன்னார்"
                    }, {
                        eng: "to me",
                        tam: "என்னிடம்"
                    }],
                    tamilMeaning: "அவர் என்னிடம் பொய் சொன்னார்.",
                    tips: "'Lie' (to not tell truth) → lied (past). Different from 'lie' (to recline) → lay (past). Context matters!"
                },
                {
                    tamil: "என்னால் தமிழும் ஆங்கிலமும் பேச முடியும்.",
                    english: "I can speak both Tamil and English.",
                    grammar: "Modal 'can' + 'speak'. 'both...and...' is a correlative conjunction connecting two items equally.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "can speak",
                        tam: "பேச முடியும்"
                    }, {
                        eng: "both Tamil and English",
                        tam: "தமிழும் ஆங்கிலமும்"
                    }],
                    tamilMeaning: "என்னால் தமிழும் ஆங்கிலமும் பேச முடியும்.",
                    tips: "Correlative conjunctions: both...and, either...or, neither...nor, not only...but also."
                },
                {
                    tamil: "அவர் என்னை விட வயதான வர்.",
                    english: "He is older than me.",
                    grammar: "Comparative adjective: adjective + -er + than. 'older' = old + er. 'than' introduces the comparison.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is older than",
                        tam: "வயதான வர்"
                    }, {
                        eng: "me",
                        tam: "என்னை விட"
                    }],
                    tamilMeaning: "அவர் என்னை விட வயதானவர்.",
                    tips: "One-syllable adjectives add -er: old→older, tall→taller. Two+ syllables use 'more': more intelligent."
                },
                {
                    tamil: "நான் இப்போது என் வீட்டை தேடுகிறேன்.",
                    english: "I am looking for my house now.",
                    grammar: "Present continuous + phrasal verb 'look for' (to search). 'now' reinforces the ongoing action.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "am looking for",
                        tam: "தேடுகிறேன்"
                    }, {
                        eng: "my house",
                        tam: "என் வீடு"
                    }, {
                        eng: "now",
                        tam: "இப்போது"
                    }],
                    tamilMeaning: "நான் இப்போது என் வீட்டைத் தேடுகிறேன்.",
                    tips: "Phrasal verbs: look for (search), look after (take care), look up (find information), look forward to (anticipate)."
                },
                {
                    tamil: "அவள் சாப்பிட்ட பிறகு படிப்பாள்.",
                    english: "She will study after she eats.",
                    grammar: "Future sentence with time clause. Main clause: will + base verb. Time clause (after...): simple present (not will).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "will study",
                        tam: "படிப்பாள்"
                    }, {
                        eng: "after she eats",
                        tam: "சாப்பிட்ட பிறகு"
                    }],
                    tamilMeaning: "அவள் சாப்பிட்ட பிறகு படிப்பாள்.",
                    tips: "After/before/when/until + present simple (not will) in time clauses: After she eats (not after she will eat)."
                },
                {
                    tamil: "அவர்கள் ஒரு புதிய வீடு வாங்கியுள்ளனர்.",
                    english: "They have bought a new house.",
                    grammar: "Present perfect: have + past participle 'bought' (buy→bought irregular). Emphasizes the result that now exists.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "have bought",
                        tam: "வாங்கியுள்ளனர்"
                    }, {
                        eng: "a new house",
                        tam: "ஒரு புதிய வீடு"
                    }],
                    tamilMeaning: "அவர்கள் ஒரு புதிய வீடு வாங்கியுள்ளனர்.",
                    tips: "Present perfect links past action to present: They have bought a house (and now they live there)."
                },
                {
                    tamil: "நான் உன்னை நம்புகிறேன்.",
                    english: "I trust you.",
                    grammar: "Simple present for a stative mental verb 'trust'. Stative verbs describe states, not actions. No continuous form.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "trust",
                        tam: "நம்புகிறேன்"
                    }, {
                        eng: "you",
                        tam: "உன்னை"
                    }],
                    tamilMeaning: "நான் உன்னை நம்புகிறேன்.",
                    tips: "Never 'I am trusting you'. Trust, believe, know, understand, like, love, hate = stative verbs."
                },
                {
                    tamil: "இந்த கேள்விக்கு பதில் தெரியவில்லை.",
                    english: "I do not know the answer to this question.",
                    grammar: "Negative simple present: do not + base verb 'know'. 'the answer to this question' = noun phrase with prepositional phrase.",
                    wordMeanings: [{
                        eng: "I do not know",
                        tam: "தெரியவில்லை"
                    }, {
                        eng: "the answer",
                        tam: "பதில்"
                    }, {
                        eng: "to this question",
                        tam: "இந்த கேள்விக்கு"
                    }],
                    tamilMeaning: "இந்த கேள்விக்கான பதில் எனக்குத் தெரியவில்லை.",
                    tips: "Answer to a question (preposition 'to'). Solution to a problem. Reply to a message."
                },
                {
                    tamil: "அவர் மூன்று ஆண்டுகளாக சென்னையில் வசிக்கிறார்.",
                    english: "He has been living in Chennai for three years.",
                    grammar: "Present perfect continuous: has + been + living. Expresses duration of ongoing action from past to present.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "has been living",
                        tam: "வசிக்கிறார்"
                    }, {
                        eng: "in Chennai",
                        tam: "சென்னையில்"
                    }, {
                        eng: "for three years",
                        tam: "மூன்று ஆண்டுகளாக"
                    }],
                    tamilMeaning: "அவர் மூன்று ஆண்டுகளாக சென்னையில் வசிக்கிறார்.",
                    tips: "For duration: for + time period. Since starting point: since 2021. Both with present perfect continuous."
                },
                {
                    tamil: "நாம் சினிமா பார்க்க போகலாமா?",
                    english: "Shall we go to watch a movie?",
                    grammar: "'Shall we' is used for suggestions/proposals in first person. 'to watch' = infinitive of purpose.",
                    wordMeanings: [{
                        eng: "Shall we",
                        tam: "நாம்...போகலாமா"
                    }, {
                        eng: "go",
                        tam: "போக"
                    }, {
                        eng: "to watch a movie",
                        tam: "சினிமா பார்க்க"
                    }],
                    tamilMeaning: "நாம் சினிமா பார்க்க போகலாமா?",
                    tips: "Shall we = proposal/suggestion. Let's go = invitation. Shall I = offer. Would you like to = polite invitation."
                },
                {
                    tamil: "அவர் என்னை அழைக்கவில்லை.",
                    english: "He did not call me.",
                    grammar: "Past negative: did not + base verb 'call'. Object pronoun 'me' comes after the verb.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "did not call",
                        tam: "அழைக்கவில்லை"
                    }, {
                        eng: "me",
                        tam: "என்னை"
                    }],
                    tamilMeaning: "அவர் என்னை அழைக்கவில்லை.",
                    tips: "Object pronouns: me, you, him, her, it, us, them — used after verbs and prepositions."
                },
                {
                    tamil: "நீ இங்கே என்ன செய்கிறாய்?",
                    english: "What are you doing here?",
                    grammar: "Wh-question in present continuous: What + are + subject + verb-ing + place. 'here' is a place adverb.",
                    wordMeanings: [{
                        eng: "What",
                        tam: "என்ன"
                    }, {
                        eng: "are you doing",
                        tam: "செய்கிறாய்"
                    }, {
                        eng: "here",
                        tam: "இங்கே"
                    }],
                    tamilMeaning: "நீ இங்கே என்ன செய்கிறாய்?",
                    tips: "For present continuous questions: What are you doing? Where are you going? Why are you crying?"
                },
                {
                    tamil: "அவள் ஒரு பிரபலமான பாடகி.",
                    english: "She is a famous singer.",
                    grammar: "'a famous singer' — 'an' is NOT used before 'famous' (f = consonant sound). 'singer' = person who sings, noun form.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "a famous singer",
                        tam: "ஒரு பிரபலமான பாடகி"
                    }],
                    tamilMeaning: "அவள் ஒரு பிரபலமான பாடகி.",
                    tips: "Agent nouns (person who does something): sing→singer, teach→teacher, write→writer, run→runner."
                },
                {
                    tamil: "அவர் தனது தவறை ஒப்புக்கொண்டார்.",
                    english: "He admitted his mistake.",
                    grammar: "Simple past: 'admitted'. admit + ted = admitted (double t before -ed). 'his mistake' = possessive + noun as object.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "admitted",
                        tam: "ஒப்புக்கொண்டார்"
                    }, {
                        eng: "his mistake",
                        tam: "தனது தவறை"
                    }],
                    tamilMeaning: "அவர் தனது தவறை ஒப்புக்கொண்டார்.",
                    tips: "Admit + -ing (not to infinitive): He admitted making a mistake. 'Admit to' also possible."
                },
                {
                    tamil: "எனக்கு இசை மிகவும் பிடிக்கும்.",
                    english: "I love music very much.",
                    grammar: "Simple present stative verb 'love'. 'music' is uncountable. 'very much' is an adverb phrase that intensifies the verb.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "love",
                        tam: "மிகவும் பிடிக்கும்"
                    }, {
                        eng: "music",
                        tam: "இசை"
                    }, {
                        eng: "very much",
                        tam: "மிகவும்"
                    }],
                    tamilMeaning: "எனக்கு இசை மிகவும் பிடிக்கும்.",
                    tips: "'Very much' after the verb: I love it very much. Not 'I very much love it' in informal speech."
                },
                {
                    tamil: "அந்த புத்தகம் கடினமாக இருந்தது.",
                    english: "That book was difficult.",
                    grammar: "Simple past with linking verb 'was'. 'was' = past of 'is'. Describes a past state.",
                    wordMeanings: [{
                        eng: "That book",
                        tam: "அந்த புத்தகம்"
                    }, {
                        eng: "was",
                        tam: "இருந்தது"
                    }, {
                        eng: "difficult",
                        tam: "கடினமாக"
                    }],
                    tamilMeaning: "அந்த புத்தகம் கடினமாக இருந்தது.",
                    tips: "Was = past of is/am. Were = past of are. He was, She was, It was, I was. They were, We were, You were."
                },
                {
                    tamil: "நான் அவரை மூன்று ஆண்டுகளுக்கு முன் சந்தித்தேன்.",
                    english: "I met him three years ago.",
                    grammar: "Simple past for a specific past time. 'ago' always follows the time expression: three years ago, five minutes ago.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "met",
                        tam: "சந்தித்தேன்"
                    }, {
                        eng: "him",
                        tam: "அவரை"
                    }, {
                        eng: "three years ago",
                        tam: "மூன்று ஆண்டுகளுக்கு முன்"
                    }],
                    tamilMeaning: "நான் மூன்று ஆண்டுகளுக்கு முன் அவரை சந்தித்தேன்.",
                    tips: "'Ago' vs 'Before': 3 years ago (from now). 3 years before (from a past point). Meet→met (irregular)."
                },
                {
                    tamil: "அவர் வீட்டிற்கு திரும்பி வந்தார்.",
                    english: "He came back home.",
                    grammar: "Simple past: 'came' (come→came irregular). 'came back' = phrasal verb meaning returned.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "came back",
                        tam: "திரும்பி வந்தார்"
                    }, {
                        eng: "home",
                        tam: "வீட்டிற்கு"
                    }],
                    tamilMeaning: "அவர் வீட்டிற்கு திரும்பி வந்தார்.",
                    tips: "'Come back' vs 'Go back': come back = return to where the speaker is. Go back = return to a place away from the speaker."
                },
                {
                    tamil: "அவள் மிகவும் கோபமாக பேசினாள்.",
                    english: "She spoke very angrily.",
                    grammar: "Simple past: 'spoke' (speak→spoke irregular). 'very angrily' = intensifier + adverb. angry→angrily (adjective→adverb).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "spoke",
                        tam: "பேசினாள்"
                    }, {
                        eng: "very angrily",
                        tam: "மிகவும் கோபமாக"
                    }],
                    tamilMeaning: "அவள் மிகவும் கோபமாக பேசினாள்.",
                    tips: "Speak→spoke (past). Adverb: angry→angrily (add -ly, change y to i). Same: happy→happily, easy→easily."
                },
                {
                    tamil: "நான் இந்த வேலையை முடித்தேன்.",
                    english: "I have finished this work.",
                    grammar: "Present perfect: have + finished. 'finished' = past participle of 'finish' (regular). Emphasizes the completion.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "have finished",
                        tam: "முடித்தேன்"
                    }, {
                        eng: "this work",
                        tam: "இந்த வேலையை"
                    }],
                    tamilMeaning: "நான் இந்த வேலையை முடித்தேன்.",
                    tips: "Present perfect signals a just-completed action with relevance to the present moment."
                },
                {
                    tamil: "நாம் அனைவரும் ஒன்றாக வேலை செய்கிறோம்.",
                    english: "We all work together.",
                    grammar: "'We all' — 'all' intensifies/quantifies 'we'. 'together' is an adverb of manner.",
                    wordMeanings: [{
                        eng: "We all",
                        tam: "நாம் அனைவரும்"
                    }, {
                        eng: "work",
                        tam: "வேலை செய்கிறோம்"
                    }, {
                        eng: "together",
                        tam: "ஒன்றாக"
                    }],
                    tamilMeaning: "நாம் அனைவரும் ஒன்றாக வேலை செய்கிறோம்.",
                    tips: "'All' with pronouns: We all, You all, They all — 'all' follows the pronoun in subject position."
                },
                {
                    tamil: "அவர் நேர்மையான ஒரு மனிதர்.",
                    english: "He is an honest man.",
                    grammar: "'an honest man' — 'an' before 'honest' because the H is silent, so it sounds like a vowel (ˈɒnɪst).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "an honest man",
                        tam: "நேர்மையான மனிதர்"
                    }],
                    tamilMeaning: "அவர் ஒரு நேர்மையான மனிதர்.",
                    tips: "Silent H words take 'an': an hour, an honest man, an heir. But 'a hotel', 'a house' (H is pronounced)."
                },
                {
                    tamil: "அவர்கள் கடந்த வாரம் சென்னை சென்றார்கள்.",
                    english: "They went to Chennai last week.",
                    grammar: "Simple past for completed action. go→went (irregular). 'to Chennai' = destination. 'last week' = past time.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "went",
                        tam: "சென்றார்கள்"
                    }, {
                        eng: "to Chennai",
                        tam: "சென்னைக்கு"
                    }, {
                        eng: "last week",
                        tam: "கடந்த வாரம்"
                    }],
                    tamilMeaning: "அவர்கள் கடந்த வாரம் சென்னைக்குச் சென்றார்கள்.",
                    tips: "Go→went→gone. 'Went' is past simple; 'gone' is past participle (used in perfect tenses)."
                },
                {
                    tamil: "நீங்கள் என்ன சாப்பிட்டீர்கள்?",
                    english: "What did you eat?",
                    grammar: "Past simple question: What + did + subject + base verb? 'eat' stays in base form because 'did' carries the past tense.",
                    wordMeanings: [{
                        eng: "What",
                        tam: "என்ன"
                    }, {
                        eng: "did you eat",
                        tam: "சாப்பிட்டீர்கள்"
                    }],
                    tamilMeaning: "நீங்கள் என்ன சாப்பிட்டீர்கள்?",
                    tips: "Past simple questions: Did you eat? What did you eat? Where did he go? The main verb stays in base form."
                },
                {
                    tamil: "அவள் இன்று பள்ளிக்கு வரவில்லை.",
                    english: "She did not come to school today.",
                    grammar: "Past negative: did not + base verb 'come'. 'today' with past tense refers to earlier today.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "did not come",
                        tam: "வரவில்லை"
                    }, {
                        eng: "to school",
                        tam: "பள்ளிக்கு"
                    }, {
                        eng: "today",
                        tam: "இன்று"
                    }],
                    tamilMeaning: "அவள் இன்று பள்ளிக்கு வரவில்லை.",
                    tips: "'Today' can be used with past tense if the action happened earlier: I saw him today (this morning)."
                },
                {
                    tamil: "அவர் ஒரு முக்கியமான முடிவு எடுத்தார்.",
                    english: "He made an important decision.",
                    grammar: "Simple past: make→made (irregular). 'an important decision' — 'an' before vowel /ɪ/ in 'important'. Make + decision = collocation.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "made",
                        tam: "எடுத்தார்"
                    }, {
                        eng: "an important decision",
                        tam: "ஒரு முக்கியமான முடிவு"
                    }],
                    tamilMeaning: "அவர் ஒரு முக்கியமான முடிவு எடுத்தார்.",
                    tips: "Collocations with 'make': make a decision, make a mistake, make progress, make an effort."
                },
                {
                    tamil: "அவர்கள் ஒரு மணி நேரத்திற்கு பேசிக்கொண்டிருந்தார்கள்.",
                    english: "They were talking for an hour.",
                    grammar: "Past continuous: were + talking. 'for an hour' = duration. Describes an ongoing past action.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "were talking",
                        tam: "பேசிக்கொண்டிருந்தார்கள்"
                    }, {
                        eng: "for an hour",
                        tam: "ஒரு மணி நேரத்திற்கு"
                    }],
                    tamilMeaning: "அவர்கள் ஒரு மணி நேரமாக பேசிக்கொண்டிருந்தார்கள்.",
                    tips: "Past continuous (was/were + -ing) for an action ongoing at a specific past time or for a duration in the past."
                },
                {
                    tamil: "நான் மாலையில் உடற்பயிற்சி செய்கிறேன்.",
                    english: "I exercise in the evening.",
                    grammar: "Simple present for regular habit. 'in the evening' = time prepositional phrase.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "exercise",
                        tam: "உடற்பயிற்சி செய்கிறேன்"
                    }, {
                        eng: "in the evening",
                        tam: "மாலையில்"
                    }],
                    tamilMeaning: "நான் மாலையில் உடற்பயிற்சி செய்கிறேன்.",
                    tips: "Time prepositions: in the morning/afternoon/evening, at night, at noon/midnight, on Monday."
                },
                {
                    tamil: "நான் உன்னை உதவ முடியும்.",
                    english: "I can help you.",
                    grammar: "Modal 'can' + base verb 'help' + object 'you'. Offer of assistance.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "can help",
                        tam: "உதவ முடியும்"
                    }, {
                        eng: "you",
                        tam: "உன்னை"
                    }],
                    tamilMeaning: "என்னால் உன்னை உதவ முடியும்.",
                    tips: "Can = ability or willingness. 'I can help you' = I am able to/willing to help you."
                },
                {
                    tamil: "அவர் எனக்கு ஒரு பரிசு கொடுத்தார்.",
                    english: "He gave me a gift.",
                    grammar: "Simple past: give→gave (irregular). Double object: 'me' (indirect object) + 'a gift' (direct object). Order: give + IO + DO.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "gave",
                        tam: "கொடுத்தார்"
                    }, {
                        eng: "me",
                        tam: "எனக்கு"
                    }, {
                        eng: "a gift",
                        tam: "ஒரு பரிசு"
                    }],
                    tamilMeaning: "அவர் எனக்கு ஒரு பரிசு கொடுத்தார்.",
                    tips: "Give something to someone (He gave a gift to me) or Give someone something (He gave me a gift) — both correct."
                },
                {
                    tamil: "அவள் என்னை பார்க்கும் போது சிரிக்கிறாள்.",
                    english: "She smiles when she sees me.",
                    grammar: "Present simple for habitual action. 'when she sees' = time clause (present simple, not continuous).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "smiles",
                        tam: "சிரிக்கிறாள்"
                    }, {
                        eng: "when she sees me",
                        tam: "என்னை பார்க்கும் போது"
                    }],
                    tamilMeaning: "அவள் என்னை பார்க்கும் போது சிரிக்கிறாள்.",
                    tips: "When + present simple describes habitual/repeated situations: She smiles when she sees me."
                },
                {
                    tamil: "நான் உன்னுடன் வரமாட்டேன்.",
                    english: "I will not come with you.",
                    grammar: "Future negative: will not + base verb. 'with you' = prepositional phrase of accompaniment.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "will not come",
                        tam: "வரமாட்டேன்"
                    }, {
                        eng: "with you",
                        tam: "உன்னுடன்"
                    }],
                    tamilMeaning: "நான் உன்னுடன் வரமாட்டேன்.",
                    tips: "Will not = won't. Contractions are more informal: I won't, he won't, they won't."
                },
                {
                    tamil: "அவர் மிகவும் அனுபவமிக்கவர்.",
                    english: "He is very experienced.",
                    grammar: "'very experienced' — past participle 'experienced' used as an adjective. 'very' as intensifier.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறார்"
                    }, {
                        eng: "very experienced",
                        tam: "மிகவும் அனுபவமிக்கவர்"
                    }],
                    tamilMeaning: "அவர் மிகவும் அனுபவமுள்ளவர்.",
                    tips: "Many -ed adjectives come from past participles: experienced, tired, excited, interested, surprised."
                },
                {
                    tamil: "நீ என்னை புரிந்துகொள்ளவில்லை.",
                    english: "You do not understand me.",
                    grammar: "Present simple negative: do not + base verb 'understand'. 'me' = object pronoun.",
                    wordMeanings: [{
                        eng: "You",
                        tam: "நீ"
                    }, {
                        eng: "do not understand",
                        tam: "புரிந்துகொள்ளவில்லை"
                    }, {
                        eng: "me",
                        tam: "என்னை"
                    }],
                    tamilMeaning: "நீ என்னை புரிந்துகொள்ளவில்லை.",
                    tips: "Understand, know, believe = stative verbs — don't use continuous form. Never 'You are not understanding me'."
                },
                {
                    tamil: "அவர்கள் ஒரு கடினமான பாதையில் நடந்தார்கள்.",
                    english: "They walked on a difficult path.",
                    grammar: "Simple past: walk→walked (regular, add -ed). 'on a difficult path' = prepositional phrase.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "walked",
                        tam: "நடந்தார்கள்"
                    }, {
                        eng: "on a difficult path",
                        tam: "கடினமான பாதையில்"
                    }],
                    tamilMeaning: "அவர்கள் ஒரு கடினமான பாதையில் நடந்தார்கள்.",
                    tips: "Walk + on a path/road/street. Walk through the forest. Walk along the beach. Prepositions change with context."
                },
                {
                    tamil: "நான் உன்னை மறந்திருக்கவில்லை.",
                    english: "I have not forgotten you.",
                    grammar: "Present perfect negative: have not + past participle 'forgotten'. forget→forgot→forgotten (irregular).",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "have not forgotten",
                        tam: "மறந்திருக்கவில்லை"
                    }, {
                        eng: "you",
                        tam: "உன்னை"
                    }],
                    tamilMeaning: "நான் உன்னை மறக்கவில்லை.",
                    tips: "Forget→forgot (past simple)→forgotten (past participle). Perfect = have/has + past participle."
                },
                {
                    tamil: "அவர் தனது குடும்பத்தை கவனிக்கிறார்.",
                    english: "He takes care of his family.",
                    grammar: "Phrasal verb 'take care of' (to look after). Simple present for habitual responsibility.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "takes care of",
                        tam: "கவனிக்கிறார்"
                    }, {
                        eng: "his family",
                        tam: "தனது குடும்பத்தை"
                    }],
                    tamilMeaning: "அவர் தனது குடும்பத்தை கவனிக்கிறார்.",
                    tips: "Three-word phrasal verbs: take care of, look forward to, put up with, get rid of — treat as a unit."
                },
                {
                    tamil: "நீங்கள் இந்த படத்தை ஏற்கனவே பார்த்தீர்களா?",
                    english: "Have you seen this movie yet?",
                    grammar: "Present perfect question: Have + subject + past participle. 'yet' used in questions/negatives for present perfect.",
                    wordMeanings: [{
                        eng: "Have you seen",
                        tam: "பார்த்தீர்களா"
                    }, {
                        eng: "this movie",
                        tam: "இந்த படத்தை"
                    }, {
                        eng: "yet",
                        tam: "ஏற்கனவே"
                    }],
                    tamilMeaning: "நீங்கள் இந்த படத்தை இன்னும் பார்த்தீர்களா?",
                    tips: "Already (affirmative), yet (negative/question), still (ongoing expectation): I have already seen it. Have you seen it yet?"
                },
                {
                    tamil: "அவர் என்னிடம் உதவி கேட்டார்.",
                    english: "He asked me for help.",
                    grammar: "Simple past: ask→asked (regular). 'ask someone for something' = subject + ask + IO + for + object.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "asked me",
                        tam: "என்னிடம் கேட்டார்"
                    }, {
                        eng: "for help",
                        tam: "உதவி"
                    }],
                    tamilMeaning: "அவர் என்னிடம் உதவி கேட்டார்.",
                    tips: "Ask for (request): ask for help, ask for money. Ask about (inquire): ask about his health. Both are common."
                },
                {
                    tamil: "அவள் ஒரு அழகான கவிதை எழுதுகிறாள்.",
                    english: "She is writing a beautiful poem.",
                    grammar: "Present continuous: 'is writing'. 'a beautiful poem' — adjective before noun in noun phrase.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is writing",
                        tam: "எழுதுகிறாள்"
                    }, {
                        eng: "a beautiful poem",
                        tam: "ஒரு அழகான கவிதை"
                    }],
                    tamilMeaning: "அவள் ஒரு அழகான கவிதை எழுதுகிறாள்.",
                    tips: "Adjective order: opinion before size before age before colour before origin before noun: beautiful small old blue Chinese bowl."
                },
                {
                    tamil: "அவர்கள் திட்டத்தை சரியாக நிறைவேற்றினார்கள்.",
                    english: "They completed the project successfully.",
                    grammar: "Simple past: complete→completed (regular). 'successfully' = adverb of manner, placed at end of sentence.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "completed",
                        tam: "நிறைவேற்றினார்கள்"
                    }, {
                        eng: "the project",
                        tam: "திட்டத்தை"
                    }, {
                        eng: "successfully",
                        tam: "சரியாக"
                    }],
                    tamilMeaning: "அவர்கள் திட்டத்தை வெற்றிகரமாக முடித்தார்கள்.",
                    tips: "Adverbs of manner usually go at the end of a clause or right before the main verb."
                },
                {
                    tamil: "நான் சாப்பிட முன் கை கழுவுகிறேன்.",
                    english: "I wash my hands before eating.",
                    grammar: "'before eating' = preposition + gerund (-ing). Simple present for habit. 'my hands' = possessive + noun.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "wash my hands",
                        tam: "கை கழுவுகிறேன்"
                    }, {
                        eng: "before eating",
                        tam: "சாப்பிட முன்"
                    }],
                    tamilMeaning: "நான் சாப்பிடுவதற்கு முன் கை கழுவுகிறேன்.",
                    tips: "Before/after + gerund (-ing): before eating, after studying, before going. Not 'before eat' or 'before to eat'."
                },
                {
                    tamil: "அவர் தனது தாயை மிகவும் நேசிக்கிறார்.",
                    english: "He loves his mother very much.",
                    grammar: "Stative verb 'love' + object 'his mother'. 'very much' as intensifying adverb at the end.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "loves",
                        tam: "நேசிக்கிறார்"
                    }, {
                        eng: "his mother",
                        tam: "தனது தாயை"
                    }, {
                        eng: "very much",
                        tam: "மிகவும்"
                    }],
                    tamilMeaning: "அவர் தனது தாயை மிகவும் நேசிக்கிறார்.",
                    tips: "'Love' for deep affection. 'Like' for preference. 'Enjoy' + gerund: He enjoys swimming."
                },
                {
                    tamil: "அவள் தனது கனவை நிறைவேற்ற கடுமையாக உழைக்கிறாள்.",
                    english: "She works hard to achieve her dream.",
                    grammar: "'to achieve her dream' = infinitive of purpose. 'hard' = adverb (not 'hardly'). Simple present for ongoing habit.",
                    wordMeanings: [{
                        eng: "She works hard",
                        tam: "கடுமையாக உழைக்கிறாள்"
                    }, {
                        eng: "to achieve",
                        tam: "நிறைவேற்ற"
                    }, {
                        eng: "her dream",
                        tam: "தனது கனவை"
                    }],
                    tamilMeaning: "அவள் தனது கனவை நிறைவேற்ற கடுமையாக உழைக்கிறாள்.",
                    tips: "Infinitive of purpose explains WHY: She studies to pass (why she studies = to pass)."
                },
                {
                    tamil: "நான் இந்த வீட்டை விரும்புகிறேன்.",
                    english: "I like this house.",
                    grammar: "Stative verb 'like'. No continuous form. Simple present for preference. 'this house' = specific house.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "like",
                        tam: "விரும்புகிறேன்"
                    }, {
                        eng: "this house",
                        tam: "இந்த வீட்டை"
                    }],
                    tamilMeaning: "நான் இந்த வீட்டை விரும்புகிறேன்.",
                    tips: "Like + noun or gerund: I like music. I like singing. Like + infinitive is also acceptable: I like to sing."
                },
                {
                    tamil: "அவர்கள் கடலோரத்தில் உலாவினார்கள்.",
                    english: "They walked along the beach.",
                    grammar: "'walked along the beach' — 'along' = preposition for movement parallel to something extended (line/shore).",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "walked",
                        tam: "உலாவினார்கள்"
                    }, {
                        eng: "along the beach",
                        tam: "கடலோரத்தில்"
                    }],
                    tamilMeaning: "அவர்கள் கடற்கரையில் நடந்தனர்.",
                    tips: "'Along' for extended surfaces: walk along the river, drive along the highway, run along the path."
                },
                {
                    tamil: "நான் உன்னை மிகவும் கவலைப்படுகிறேன்.",
                    english: "I worry about you a lot.",
                    grammar: "'worry about' = phrasal verb. 'a lot' = informal intensifier, placed at end. Simple present for ongoing feeling.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "worry about",
                        tam: "கவலைப்படுகிறேன்"
                    }, {
                        eng: "you",
                        tam: "உன்னை"
                    }, {
                        eng: "a lot",
                        tam: "மிகவும்"
                    }],
                    tamilMeaning: "நான் உனக்காக மிகவும் கவலைப்படுகிறேன்.",
                    tips: "Worry about (person/thing): worry about you, worry about the future. 'A lot' is informal; 'very much' is formal."
                },
                {
                    tamil: "அவர் மிகவும் புத்திசாலியாக பேசினார்.",
                    english: "He spoke very intelligently.",
                    grammar: "Simple past 'spoke' + adverb 'intelligently'. intelligent + ly = intelligently.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "spoke",
                        tam: "பேசினார்"
                    }, {
                        eng: "very intelligently",
                        tam: "மிகவும் புத்திசாலியாக"
                    }],
                    tamilMeaning: "அவர் மிகவும் புத்திசாலியாகப் பேசினார்.",
                    tips: "Forming adverbs: adjective + -ly. intelligent→intelligently, careful→carefully, quick→quickly."
                },
                {
                    tamil: "நான் உன்னை ஒரு நல்ல நண்பனாக நினைக்கிறேன்.",
                    english: "I consider you a good friend.",
                    grammar: "'consider + object + noun phrase' = to regard as. No 'as' needed: consider you a good friend (not 'consider you as').",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "consider you",
                        tam: "உன்னை நினைக்கிறேன்"
                    }, {
                        eng: "a good friend",
                        tam: "நல்ல நண்பன்"
                    }],
                    tamilMeaning: "நான் உன்னை ஒரு நல்ல நண்பனாக கருதுகிறேன்.",
                    tips: "Consider/call/name/find + object + noun/adjective complement: I consider him honest. They called her brilliant."
                },
                {
                    tamil: "அவள் ஒரு நல்ல படிப்பாளி.",
                    english: "She is a good student.",
                    grammar: "'a good student' — opinion adjective 'good' before noun 'student'. Simple present with 'is'.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "is",
                        tam: "இருக்கிறாள்"
                    }, {
                        eng: "a good student",
                        tam: "நல்ல படிப்பாளி"
                    }],
                    tamilMeaning: "அவள் ஒரு நல்ல மாணவி.",
                    tips: "Good student: someone who studies well. Brilliant student: exceptionally smart. Hard-working student: one who puts in effort."
                },
                {
                    tamil: "அவர் ஒரு சிறந்த தலைவர் ஆவார்.",
                    english: "He will be a great leader.",
                    grammar: "Future with 'will be'. 'great leader' — 'a' before great (consonant). Prediction about the future.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "will be",
                        tam: "ஆவார்"
                    }, {
                        eng: "a great leader",
                        tam: "சிறந்த தலைவர்"
                    }],
                    tamilMeaning: "அவர் ஒரு சிறந்த தலைவராக இருப்பார்.",
                    tips: "Will + be = future state. 'Great' means excellent; 'big' refers to size. 'A great leader', not 'a big leader'."
                },
                {
                    tamil: "நான் உன்னிடம் ஒரு கேள்வி கேட்கலாமா?",
                    english: "May I ask you a question?",
                    grammar: "'May I' = polite request/permission. 'ask you a question' = verb + indirect object + direct object.",
                    wordMeanings: [{
                        eng: "May I",
                        tam: "நான்...கேட்கலாமா"
                    }, {
                        eng: "ask",
                        tam: "கேட்க"
                    }, {
                        eng: "you",
                        tam: "உன்னிடம்"
                    }, {
                        eng: "a question",
                        tam: "ஒரு கேள்வி"
                    }],
                    tamilMeaning: "நான் உன்னிடம் ஒரு கேள்வி கேட்கலாமா?",
                    tips: "May I = formal permission. Can I = informal. Could I = polite. Would you mind if I = very polite."
                },
                {
                    tamil: "அவள் தனது படிப்பில் சிறந்து விளங்குகிறாள்.",
                    english: "She excels in her studies.",
                    grammar: "'excel in' = phrasal verb (to be very good at). 'her studies' = possessive + noun (plural used for academic subjects).",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "excels in",
                        tam: "சிறந்து விளங்குகிறாள்"
                    }, {
                        eng: "her studies",
                        tam: "படிப்பில்"
                    }],
                    tamilMeaning: "அவள் தனது படிப்பில் சிறந்து விளங்குகிறாள்.",
                    tips: "Excel in, specialize in, succeed in, fail in — preposition 'in' with these academic/performance verbs."
                },
                {
                    tamil: "அவர் தனது தவறிலிருந்து கற்றுக்கொண்டார்.",
                    english: "He learned from his mistake.",
                    grammar: "Simple past: learn→learned. 'from his mistake' = prepositional phrase. 'learn from' = phrasal verb.",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "learned",
                        tam: "கற்றுக்கொண்டார்"
                    }, {
                        eng: "from his mistake",
                        tam: "தனது தவறிலிருந்து"
                    }],
                    tamilMeaning: "அவர் தனது தவறிலிருந்து கற்றுக்கொண்டார்.",
                    tips: "Learn from = take a lesson from. Learn about = gain knowledge on a topic. Learn how to = learn a skill."
                },
                {
                    tamil: "நான் ஒவ்வொரு நாளும் தமிழ் செய்திகள் படிக்கிறேன்.",
                    english: "I read Tamil news every day.",
                    grammar: "Simple present habit. 'Tamil news' = noun phrase (language as adjective before noun). 'every day' = frequency.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "read",
                        tam: "படிக்கிறேன்"
                    }, {
                        eng: "Tamil news",
                        tam: "தமிழ் செய்திகள்"
                    }, {
                        eng: "every day",
                        tam: "ஒவ்வொரு நாளும்"
                    }],
                    tamilMeaning: "நான் ஒவ்வொரு நாளும் தமிழ் செய்திகள் படிக்கிறேன்.",
                    tips: "Frequency expressions: every day, twice a week, three times a month, once a year."
                },
                {
                    tamil: "அவர்கள் இன்னும் இங்கே இருக்கிறார்கள்.",
                    english: "They are still here.",
                    grammar: "'still' = adverb of continuation, placed between 'are' and adjective/adverb. Shows continuity of a state.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "are still",
                        tam: "இன்னும் இருக்கிறார்கள்"
                    }, {
                        eng: "here",
                        tam: "இங்கே"
                    }],
                    tamilMeaning: "அவர்கள் இன்னும் இங்கே இருக்கிறார்கள்.",
                    tips: "Still (continuing): They are still here. Yet (expected but not yet): He hasn't come yet. Already (sooner than expected)."
                },
                {
                    tamil: "நான் அந்த வேலையை ஏற்கனவே முடித்துவிட்டேன்.",
                    english: "I have already completed that task.",
                    grammar: "Present perfect with 'already'. 'already' placed between 'have' and past participle. Emphasizes prior completion.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "have already completed",
                        tam: "ஏற்கனவே முடித்துவிட்டேன்"
                    }, {
                        eng: "that task",
                        tam: "அந்த வேலையை"
                    }],
                    tamilMeaning: "நான் அந்த பணியை ஏற்கனவே முடித்துவிட்டேன்.",
                    tips: "Perfect tense signals relevance to present: I have completed it (= it's done now, no need to do it again)."
                },
                {
                    tamil: "நீங்கள் என்னுடன் வர முடியுமா?",
                    english: "Can you come with me?",
                    grammar: "Modal question: Can + subject + base verb? 'with me' = prepositional phrase of accompaniment.",
                    wordMeanings: [{
                        eng: "Can you",
                        tam: "நீங்கள்...முடியுமா"
                    }, {
                        eng: "come",
                        tam: "வர"
                    }, {
                        eng: "with me",
                        tam: "என்னுடன்"
                    }],
                    tamilMeaning: "நீங்கள் என்னுடன் வர முடியுமா?",
                    tips: "'Can you' = informal request. 'Could you' = more polite. 'Would you be able to' = very formal."
                },
                {
                    tamil: "அவர் இரவு தாமதமாக வீட்டிற்கு திரும்பினார்.",
                    english: "He returned home late at night.",
                    grammar: "Simple past: return→returned. 'late at night' = time adverb phrase. 'home' used without preposition (go home, return home).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "returned home",
                        tam: "வீட்டிற்கு திரும்பினார்"
                    }, {
                        eng: "late at night",
                        tam: "இரவு தாமதமாக"
                    }],
                    tamilMeaning: "அவர் இரவு தாமதமாக வீட்டிற்கு திரும்பினார்.",
                    tips: "'Go home/come home/return home' — no preposition needed. But 'go to the shop', 'come to school'."
                },
                {
                    tamil: "அவர்கள் திடீரென்று நிறுத்தினார்கள்.",
                    english: "They stopped suddenly.",
                    grammar: "Simple past: stop→stopped (double p before -ed). 'suddenly' = adverb of manner, usually at end or beginning.",
                    wordMeanings: [{
                        eng: "They",
                        tam: "அவர்கள்"
                    }, {
                        eng: "stopped",
                        tam: "நிறுத்தினார்கள்"
                    }, {
                        eng: "suddenly",
                        tam: "திடீரென்று"
                    }],
                    tamilMeaning: "அவர்கள் திடீரென்று நிறுத்தினார்கள்.",
                    tips: "Suddenly, quickly, immediately — these adverbs can go at the beginning for emphasis: Suddenly, they stopped."
                },
                {
                    tamil: "அவர் தினமும் பத்திரிகை படிக்கிறார்.",
                    english: "He reads the newspaper every day.",
                    grammar: "Simple present for daily habit. 'the newspaper' = definite article (a specific, known newspaper).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "reads",
                        tam: "படிக்கிறார்"
                    }, {
                        eng: "the newspaper",
                        tam: "பத்திரிகை"
                    }, {
                        eng: "every day",
                        tam: "தினமும்"
                    }],
                    tamilMeaning: "அவர் தினமும் பத்திரிகை படிக்கிறார்.",
                    tips: "'Read the newspaper', 'watch the news', 'listen to the radio' — fixed collocations with definite articles."
                },
                {
                    tamil: "நான் அந்த புத்தகம் படித்ததை ரசித்தேன்.",
                    english: "I enjoyed reading that book.",
                    grammar: "'enjoy' + gerund (-ing). enjoy + reading = enjoyed reading. Simple past: enjoy→enjoyed.",
                    wordMeanings: [{
                        eng: "I",
                        tam: "நான்"
                    }, {
                        eng: "enjoyed reading",
                        tam: "படித்ததை ரசித்தேன்"
                    }, {
                        eng: "that book",
                        tam: "அந்த புத்தகம்"
                    }],
                    tamilMeaning: "நான் அந்த புத்தகத்தை படிப்பதை ரசித்தேன்.",
                    tips: "Enjoy + -ing (gerund): enjoy reading, enjoy swimming, enjoy cooking. Never 'enjoy to read'."
                },
                {
                    tamil: "அவள் தனது பரீட்சையில் தேர்ச்சி பெற்றாள்.",
                    english: "She passed her examination.",
                    grammar: "Simple past: pass→passed. 'her examination' = possessive + noun. Pass = succeed in an exam.",
                    wordMeanings: [{
                        eng: "She",
                        tam: "அவள்"
                    }, {
                        eng: "passed",
                        tam: "தேர்ச்சி பெற்றாள்"
                    }, {
                        eng: "her examination",
                        tam: "தனது பரீட்சையில்"
                    }],
                    tamilMeaning: "அவள் தனது தேர்வில் தேர்ச்சி பெற்றாள்.",
                    tips: "Pass an exam ≠ pass a place. Pass (exam) = succeed. Fail an exam = not pass. Take an exam = sit the exam."
                },
                {
                    tamil: "அவர் தினமும் காலையில் யோகா செய்கிறார்.",
                    english: "He does yoga every morning.",
                    grammar: "'do yoga' = collocation (not 'make yoga' or 'practice yoga', though practice is also acceptable).",
                    wordMeanings: [{
                        eng: "He",
                        tam: "அவர்"
                    }, {
                        eng: "does yoga",
                        tam: "யோகா செய்கிறார்"
                    }, {
                        eng: "every morning",
                        tam: "தினமும் காலையில்"
                    }],
                    tamilMeaning: "அவர் தினமும் காலையில் யோகா செய்கிறார்.",
                    tips: "Do + activities: do yoga, do exercise, do homework, do the dishes. Make + products: make food, make a cake."
                },
            ],

            hard: [{
                    tamil: "அவர் தனது கைகளை மடித்துக்கொண்டு என்னை ஆழமாக பார்த்தார்.",
                    english: "He folded his arms and looked at me deeply.",
                    grammar: "Compound sentence with 'and' joining two past actions. 'folded his arms' = past tense action. 'looked at' = phrasal verb. 'deeply' = adverb.",
                    wordMeanings: [{
                        eng: "He folded",
                        tam: "மடித்துக்கொண்டார்"
                    }, {
                        eng: "his arms",
                        tam: "தனது கைகளை"
                    }, {
                        eng: "and looked at me",
                        tam: "என்னை பார்த்தார்"
                    }, {
                        eng: "deeply",
                        tam: "ஆழமாக"
                    }],
                    tamilMeaning: "அவர் தனது கைகளை மடித்துக்கொண்டு என்னை ஆழமாக பார்த்தார்.",
                    tips: "Compound sentences use coordinating conjunctions (and, but, or, so, yet) to join two independent clauses."
                },
                {
                    tamil: "நான் முன்பே சொன்னதை நீங்கள் கேட்டிருந்தால் இது நடந்திருக்காது.",
                    english: "If you had listened to what I said earlier, this would not have happened.",
                    grammar: "Third conditional: If + past perfect (had listened), would have + past participle (happened). For past hypothetical situations.",
                    wordMeanings: [{
                        eng: "If you had listened",
                        tam: "கேட்டிருந்தால்"
                    }, {
                        eng: "to what I said",
                        tam: "நான் சொன்னதை"
                    }, {
                        eng: "this would not have happened",
                        tam: "இது நடந்திருக்காது"
                    }],
                    tamilMeaning: "நான் முன்பு சொன்னதை நீர் கேட்டிருந்தால், இது நடந்திருக்காது.",
                    tips: "Third conditional = imaginary past. Past perfect in if-clause; would have + past participle in main clause."
                },
                {
                    tamil: "அவர் தன் தவறுக்காக மன்னிப்பு கேட்கவில்லை என்பது ஆச்சரியமாக இருக்கிறது.",
                    english: "It is surprising that he did not apologize for his mistake.",
                    grammar: "'It is surprising that...' = extraposition. The real subject is the that-clause. 'apologize for' = verb + preposition.",
                    wordMeanings: [{
                        eng: "It is surprising",
                        tam: "ஆச்சரியமாக இருக்கிறது"
                    }, {
                        eng: "that he did not apologize",
                        tam: "அவர் மன்னிப்பு கேட்கவில்லை என்பது"
                    }, {
                        eng: "for his mistake",
                        tam: "தன் தவறுக்காக"
                    }],
                    tamilMeaning: "அவர் தன் தவறுக்காக மன்னிப்பு கேட்கவில்லை என்பது ஆச்சரியமாக உள்ளது.",
                    tips: "'It is + adjective + that + clause' is a common pattern: It is clear that, It is important that, It is strange that."
                },
                {
                    tamil: "அவர் பேசினார், ஆனால் யாரும் கேட்கவில்லை.",
                    english: "He spoke, but nobody listened.",
                    grammar: "Compound sentence: two independent clauses joined by 'but' (contrast). Both in simple past.",
                    wordMeanings: [{
                        eng: "He spoke",
                        tam: "அவர் பேசினார்"
                    }, {
                        eng: "but",
                        tam: "ஆனால்"
                    }, {
                        eng: "nobody listened",
                        tam: "யாரும் கேட்கவில்லை"
                    }],
                    tamilMeaning: "அவர் பேசினார், ஆனால் யாரும் கேட்கவில்லை.",
                    tips: "'But' shows contrast or unexpected result. 'Yet' is more formal: He spoke, yet nobody listened."
                },
                {
                    tamil: "அவர்கள் பல ஆண்டுகளாக நட்பை பேணி வந்தனர்.",
                    english: "They have maintained their friendship for many years.",
                    grammar: "Present perfect: have + maintained. 'for many years' = duration. 'maintained' = past participle of maintain (regular).",
                    wordMeanings: [{
                        eng: "They have maintained",
                        tam: "பேணி வந்தனர்"
                    }, {
                        eng: "their friendship",
                        tam: "நட்பை"
                    }, {
                        eng: "for many years",
                        tam: "பல ஆண்டுகளாக"
                    }],
                    tamilMeaning: "அவர்கள் பல ஆண்டுகளாக தங்கள் நட்பை பேணி வந்தனர்.",
                    tips: "Present perfect with 'for' shows duration from past to present — action started then and is still relevant."
                },
                {
                    tamil: "அவள் பேசும்போது, மற்றவர்கள் கவனமாக கேட்கிறார்கள்.",
                    english: "When she speaks, others listen carefully.",
                    grammar: "Time clause 'When she speaks' + main clause 'others listen carefully'. Simple present throughout for habitual truth.",
                    wordMeanings: [{
                        eng: "When she speaks",
                        tam: "அவள் பேசும்போது"
                    }, {
                        eng: "others",
                        tam: "மற்றவர்கள்"
                    }, {
                        eng: "listen carefully",
                        tam: "கவனமாக கேட்கிறார்கள்"
                    }],
                    tamilMeaning: "அவள் பேசும்போது, மற்றவர்கள் கவனமாக கேட்கிறார்கள்.",
                    tips: "When + present simple, present simple = habitual. When + past, past = sequential past events."
                },
                {
                    tamil: "அவர் நல்லவராக இருந்தாலும், சில நேரங்களில் கோபமடைவார்.",
                    english: "Although he is a good person, he gets angry sometimes.",
                    grammar: "Concessive clause: Although + clause, main clause. 'although' = despite the fact that. 'sometimes' = frequency adverb.",
                    wordMeanings: [{
                        eng: "Although",
                        tam: "இருந்தாலும்"
                    }, {
                        eng: "he is a good person",
                        tam: "அவர் நல்லவராக இருந்தாலும்"
                    }, {
                        eng: "he gets angry",
                        tam: "கோபமடைவார்"
                    }, {
                        eng: "sometimes",
                        tam: "சில நேரங்களில்"
                    }],
                    tamilMeaning: "அவர் நல்லவராக இருந்தாலும், சில சமயங்களில் கோபப்படுவார்.",
                    tips: "Concessive conjunctions: although, though, even though, despite, in spite of — show unexpected contrast."
                },
                {
                    tamil: "அவர் என்னை பார்த்தவுடன் ஓடினார்.",
                    english: "As soon as he saw me, he ran away.",
                    grammar: "'As soon as' = time conjunction for immediate sequence. Past tense in both clauses. 'ran' = irregular past of run.",
                    wordMeanings: [{
                        eng: "As soon as",
                        tam: "பார்த்தவுடன்"
                    }, {
                        eng: "he saw me",
                        tam: "அவர் என்னை பார்த்தார்"
                    }, {
                        eng: "he ran away",
                        tam: "ஓடினார்"
                    }],
                    tamilMeaning: "அவர் என்னை பார்த்தவுடன், ஓடி விட்டார்.",
                    tips: "As soon as = immediately when. Similar: the moment that, no sooner...than. Both clauses use past tense."
                },
                {
                    tamil: "இந்த திட்டம் நிறைவேறும் வரை நாங்கள் உழைத்துக் கொண்டிருப்போம்.",
                    english: "We will keep working until this project is completed.",
                    grammar: "'will keep + verb-ing' = future continuous effort. 'until + present simple' = time clause (not future).",
                    wordMeanings: [{
                        eng: "We will keep working",
                        tam: "நாங்கள் உழைத்துக் கொண்டிருப்போம்"
                    }, {
                        eng: "until",
                        tam: "வரை"
                    }, {
                        eng: "this project is completed",
                        tam: "திட்டம் நிறைவேறும்"
                    }],
                    tamilMeaning: "இந்த திட்டம் முடியும் வரை நாங்கள் தொடர்ந்து வேலை செய்வோம்.",
                    tips: "Until/till/by the time + present simple (not will) in time clauses, even when referring to future."
                },
                {
                    tamil: "அவர் தனது வேலையில் முழு மனதை செலுத்தி செய்கிறார்.",
                    english: "He puts his whole heart into his work.",
                    grammar: "Idiomatic expression: 'put one's heart into' = to do something with full dedication. Simple present for habitual behavior.",
                    wordMeanings: [{
                        eng: "He puts",
                        tam: "செலுத்துகிறார்"
                    }, {
                        eng: "his whole heart",
                        tam: "முழு மனதை"
                    }, {
                        eng: "into his work",
                        tam: "வேலையில்"
                    }],
                    tamilMeaning: "அவர் தனது வேலையில் முழு மனதை வைக்கிறார்.",
                    tips: "Body-part idioms: put heart into (dedicate), keep eye on (watch), give hand (help), lose head (panic)."
                },
                {
                    tamil: "அந்த திட்டம் நேற்று நிறுத்தப்பட்டது.",
                    english: "The project was suspended yesterday.",
                    grammar: "Passive voice in simple past: was + past participle 'suspended'. 'yesterday' = past time marker.",
                    wordMeanings: [{
                        eng: "The project",
                        tam: "அந்த திட்டம்"
                    }, {
                        eng: "was suspended",
                        tam: "நிறுத்தப்பட்டது"
                    }, {
                        eng: "yesterday",
                        tam: "நேற்று"
                    }],
                    tamilMeaning: "அந்த திட்டம் நேற்று இடைநிறுத்தப்பட்டது.",
                    tips: "Passive: be + past participle. Used when the doer is unknown, unimportant, or obvious from context."
                },
                {
                    tamil: "அவர்கள் பல ஆண்டுகளாக ஒரே வீட்டில் வாழ்ந்தாலும் ஒருபோதும் வாக்குவாதமில்லை.",
                    english: "Although they have lived in the same house for many years, they have never argued.",
                    grammar: "Concessive clause (although) + present perfect in both clauses (have lived, have argued). 'never' = negative adverb.",
                    wordMeanings: [{
                        eng: "Although",
                        tam: "வாழ்ந்தாலும்"
                    }, {
                        eng: "they have lived",
                        tam: "வாழ்ந்திருக்கிறார்கள்"
                    }, {
                        eng: "for many years",
                        tam: "பல ஆண்டுகளாக"
                    }, {
                        eng: "have never argued",
                        tam: "வாக்குவாதமில்லை"
                    }],
                    tamilMeaning: "பல ஆண்டுகளாக ஒரே வீட்டில் வாழ்ந்தாலும், அவர்கள் ஒருபோதும் வாக்குவாதமிட்டதில்லை.",
                    tips: "'Never' goes between have and past participle: have never argued, have never eaten, have never seen."
                },
                {
                    tamil: "நீங்கள் படிக்காவிட்டால், தேர்வில் தோல்வியடைவீர்கள்.",
                    english: "If you do not study, you will fail the exam.",
                    grammar: "First conditional (negative): If + present simple (negative), will + base verb. Real future consequence.",
                    wordMeanings: [{
                        eng: "If you do not study",
                        tam: "படிக்காவிட்டால்"
                    }, {
                        eng: "you will fail",
                        tam: "தோல்வியடைவீர்கள்"
                    }, {
                        eng: "the exam",
                        tam: "தேர்வில்"
                    }],
                    tamilMeaning: "நீங்கள் படிக்காவிட்டால், தேர்வில் தோல்வியடைவீர்கள்.",
                    tips: "First conditional negative: If you don't study, you will fail. The if-clause can swap position with the main clause."
                },
                {
                    tamil: "அவர் இதற்கு முன்பே இந்த நிலைமையை எதிர்கொண்டிருந்தார்.",
                    english: "He had faced this situation before.",
                    grammar: "Past perfect: had + past participle 'faced'. Used for an action completed before another past event.",
                    wordMeanings: [{
                        eng: "He had faced",
                        tam: "எதிர்கொண்டிருந்தார்"
                    }, {
                        eng: "this situation",
                        tam: "இந்த நிலைமையை"
                    }, {
                        eng: "before",
                        tam: "இதற்கு முன்பே"
                    }],
                    tamilMeaning: "அவர் இதற்கு முன்பே இந்த சூழ்நிலையை எதிர்கொண்டிருந்தார்.",
                    tips: "Past perfect (had + pp) for 'past before the past'. She had left before he arrived. Sequence is key."
                },
                {
                    tamil: "நான் கடந்த பத்து ஆண்டுகளாக இந்த நிறுவனத்தில் பணியாற்றி வருகிறேன்.",
                    english: "I have been working in this company for the past ten years.",
                    grammar: "Present perfect continuous: have been + working. 'for the past ten years' = duration. Emphasizes the ongoing, continuous nature.",
                    wordMeanings: [{
                        eng: "I have been working",
                        tam: "பணியாற்றி வருகிறேன்"
                    }, {
                        eng: "in this company",
                        tam: "இந்த நிறுவனத்தில்"
                    }, {
                        eng: "for the past ten years",
                        tam: "கடந்த பத்து ஆண்டுகளாக"
                    }],
                    tamilMeaning: "நான் கடந்த பத்து ஆண்டுகளாக இந்த நிறுவனத்தில் பணிபுரிந்து வருகிறேன்.",
                    tips: "Present perfect continuous stresses the ongoing duration of an activity from the past until now."
                },
                {
                    tamil: "அவர் கடிதம் எழுதியிருந்தால், நாம் அவரை அறிந்திருப்போம்.",
                    english: "If he had written a letter, we would have known him.",
                    grammar: "Third conditional: had written + would have known. Imaginary past — did not happen.",
                    wordMeanings: [{
                        eng: "If he had written",
                        tam: "எழுதியிருந்தால்"
                    }, {
                        eng: "a letter",
                        tam: "கடிதம்"
                    }, {
                        eng: "we would have known",
                        tam: "நாம் அறிந்திருப்போம்"
                    }, {
                        eng: "him",
                        tam: "அவரை"
                    }],
                    tamilMeaning: "அவர் கடிதம் எழுதியிருந்தால், நாம் அவரை அறிந்திருப்போம்.",
                    tips: "Third conditional = impossible past condition. It didn't happen, so the result also didn't happen."
                },
                {
                    tamil: "அவர் எவ்வளவு கடினமாக உழைத்தாலும் ஒருபோதும் புகழ் பெறவில்லை.",
                    english: "No matter how hard he worked, he never became famous.",
                    grammar: "'No matter how + adjective + clause' = concessive. Past tense throughout. 'became' = become + past.",
                    wordMeanings: [{
                        eng: "No matter how hard",
                        tam: "எவ்வளவு கடினமாக"
                    }, {
                        eng: "he worked",
                        tam: "உழைத்தாலும்"
                    }, {
                        eng: "he never became famous",
                        tam: "புகழ் பெறவில்லை"
                    }],
                    tamilMeaning: "அவர் எவ்வளவு கடினமாக உழைத்தாலும், ஒருபோதும் பிரபலமடையவில்லை.",
                    tips: "'No matter how/what/where/when/who' = concessive meaning 'it doesn't matter that'. Shows futility."
                },
                {
                    tamil: "அவர்கள் ஒருவருக்கொருவர் நம்பிக்கையுடன் இருந்தால் மட்டுமே இந்த உறவு நிலைக்கும்.",
                    english: "This relationship will last only if they trust each other.",
                    grammar: "'only if' = restrictive condition. Main clause: will last. If-clause: simple present (not will). 'each other' = reciprocal pronoun.",
                    wordMeanings: [{
                        eng: "This relationship will last",
                        tam: "இந்த உறவு நிலைக்கும்"
                    }, {
                        eng: "only if",
                        tam: "மட்டுமே"
                    }, {
                        eng: "they trust each other",
                        tam: "ஒருவருக்கொருவர் நம்பிக்கையுடன் இருந்தால்"
                    }],
                    tamilMeaning: "இந்த உறவு நிலைக்கும், ஆனால் அவர்கள் ஒருவரையொருவர் நம்பினால் மட்டுமே.",
                    tips: "'Each other' (two people), 'one another' (more than two). Both are now widely used interchangeably."
                },
                {
                    tamil: "அவர் என்ன செய்தாலும் அது நல்லதற்கே.",
                    english: "Whatever he does, it is for the best.",
                    grammar: "'Whatever he does' = nominal relative clause as subject. 'for the best' = idiomatic phrase meaning resulting in a good outcome.",
                    wordMeanings: [{
                        eng: "Whatever he does",
                        tam: "அவர் என்ன செய்தாலும்"
                    }, {
                        eng: "it is",
                        tam: "அது"
                    }, {
                        eng: "for the best",
                        tam: "நல்லதற்கே"
                    }],
                    tamilMeaning: "அவர் என்ன செய்தாலும், அது நல்லதற்காகவே.",
                    tips: "Whatever/whenever/whoever/wherever/however = free relative pronouns/adverbs meaning 'no matter what/when/who/where/how'."
                },
                {
                    tamil: "நான் அவரை நம்பினேன், ஆனால் அவர் என்னை ஏமாற்றினார்.",
                    english: "I trusted him, but he betrayed me.",
                    grammar: "Compound sentence in simple past. 'trusted' = regular past. 'betrayed' = regular past. 'but' = contrast/unexpected result.",
                    wordMeanings: [{
                        eng: "I trusted him",
                        tam: "நான் அவரை நம்பினேன்"
                    }, {
                        eng: "but",
                        tam: "ஆனால்"
                    }, {
                        eng: "he betrayed me",
                        tam: "அவர் என்னை ஏமாற்றினார்"
                    }],
                    tamilMeaning: "நான் அவரை நம்பினேன், ஆனால் அவர் என்னை துரோகம் செய்தார்.",
                    tips: "Betray = to be disloyal. Synonyms: deceive, trick, double-cross. Betray→betrayed (regular verb)."
                },
                {
                    tamil: "அவர் மிகவும் சோர்வடைந்திருந்தால் ஒழிய அந்த கோபுரத்தில் ஏறியிருப்பார்.",
                    english: "He would have climbed that tower unless he was too exhausted.",
                    grammar: "Third conditional + unless (= if not). 'would have climbed' = past hypothetical. 'was too exhausted' = past state.",
                    wordMeanings: [{
                        eng: "He would have climbed",
                        tam: "ஏறியிருப்பார்"
                    }, {
                        eng: "that tower",
                        tam: "அந்த கோபுரத்தில்"
                    }, {
                        eng: "unless he was too exhausted",
                        tam: "மிகவும் சோர்வடைந்திருந்தால் ஒழிய"
                    }],
                    tamilMeaning: "மிகவும் சோர்வடைந்திராவிட்டால், அவர் அந்த கோபுரத்தில் ஏறியிருப்பார்.",
                    tips: "'Unless' = 'if not'. Unless you study = If you don't study. It introduces the exception/condition."
                },
                {
                    tamil: "அவர் என்னிடம் பேசுவதற்கு கூட தயாரில்லை.",
                    english: "He is not even willing to talk to me.",
                    grammar: "'not even' = emphatic negation. 'willing to + base verb' = adjective + infinitive expressing readiness.",
                    wordMeanings: [{
                        eng: "He is not",
                        tam: "அவர்...இல்லை"
                    }, {
                        eng: "even willing",
                        tam: "கூட தயாரில்லை"
                    }, {
                        eng: "to talk to me",
                        tam: "என்னிடம் பேசுவதற்கு"
                    }],
                    tamilMeaning: "அவர் என்னிடம் பேசக்கூட தயாரில்லை.",
                    tips: "Willing to, ready to, able to, likely to, supposed to — adjective + infinitive patterns."
                },
                {
                    tamil: "அவர் புகழ் பெற்றிருந்தாலும் மிகவும் எளிமையானவர்.",
                    english: "Despite being famous, he is very humble.",
                    grammar: "'Despite' + gerund phrase 'being famous'. Despite = preposition (takes noun/gerund, not clause). 'humble' = modest, not proud.",
                    wordMeanings: [{
                        eng: "Despite being famous",
                        tam: "புகழ் பெற்றிருந்தாலும்"
                    }, {
                        eng: "he is",
                        tam: "அவர் இருக்கிறார்"
                    }, {
                        eng: "very humble",
                        tam: "மிகவும் எளிமையானவர்"
                    }],
                    tamilMeaning: "பிரபலமாக இருந்தாலும், அவர் மிகவும் எளிமையானவர்.",
                    tips: "Despite/In spite of + noun/gerund. Although/Even though + clause. Both show concession (contrast)."
                },
                {
                    tamil: "அவர் நினைத்ததை சாதிக்கும் வரை ஓய்வெடுக்க மாட்டார்.",
                    english: "He will not rest until he achieves what he intends.",
                    grammar: "Future negative + until clause (present simple). 'what he intends' = noun clause as object of achieve.",
                    wordMeanings: [{
                        eng: "He will not rest",
                        tam: "ஓய்வெடுக்க மாட்டார்"
                    }, {
                        eng: "until",
                        tam: "வரை"
                    }, {
                        eng: "he achieves what he intends",
                        tam: "நினைத்ததை சாதிக்கும்"
                    }],
                    tamilMeaning: "அவர் நினைத்ததை சாதிக்கும் வரை ஓய்வெடுக்க மாட்டார்.",
                    tips: "Until = up to the point when. Not until = only after. He won't rest until = He will rest only after he achieves."
                },
                {
                    tamil: "அவர் மிகவும் திறமையானவர் என்பதில் சந்தேகமில்லை.",
                    english: "There is no doubt that he is very talented.",
                    grammar: "'There is no doubt that' = formal structure with expletive 'there'. Noun clause 'that he is very talented' is the real subject.",
                    wordMeanings: [{
                        eng: "There is no doubt",
                        tam: "சந்தேகமில்லை"
                    }, {
                        eng: "that he is very talented",
                        tam: "அவர் மிகவும் திறமையானவர் என்பதில்"
                    }],
                    tamilMeaning: "அவர் மிகவும் திறமையானவர் என்பதில் எந்த சந்தேகமும் இல்லை.",
                    tips: "'There is no doubt that', 'There is no question that', 'It is certain that' — formal expressions of certainty."
                },
                {
                    tamil: "நான் உயர்ந்த இடத்தை அடைய எந்த தியாகமும் செய்யத் தயார்.",
                    english: "I am ready to make any sacrifice to reach a higher position.",
                    grammar: "'ready to + infinitive' for willingness. 'make a sacrifice' = collocation. 'any' in affirmative = willingness to include all.",
                    wordMeanings: [{
                        eng: "I am ready to make",
                        tam: "செய்யத் தயார்"
                    }, {
                        eng: "any sacrifice",
                        tam: "எந்த தியாகமும்"
                    }, {
                        eng: "to reach a higher position",
                        tam: "உயர்ந்த இடத்தை அடைய"
                    }],
                    tamilMeaning: "உயர்ந்த நிலையை அடைய எந்தத் தியாகத்தையும் செய்யத் தயாராக இருக்கிறேன்.",
                    tips: "'Any' in affirmatives = every/all possible: any sacrifice = all types of sacrifices. 'Any' in negatives = none."
                },
                {
                    tamil: "அவர் வெற்றியடைவதற்கான ஒரே வழி கடினமாக உழைப்பதே.",
                    english: "The only way for him to succeed is to work hard.",
                    grammar: "'The only way...is to + infinitive' structure. 'for him to succeed' = infinitive phrase with subject 'him'.",
                    wordMeanings: [{
                        eng: "The only way",
                        tam: "ஒரே வழி"
                    }, {
                        eng: "for him to succeed",
                        tam: "வெற்றியடைவதற்கான"
                    }, {
                        eng: "is to work hard",
                        tam: "கடினமாக உழைப்பதே"
                    }],
                    tamilMeaning: "அவர் வெற்றிபெற ஒரே வழி கடுமையாக உழைப்பதே.",
                    tips: "'The only way to do something is to...' — parallel infinitive structure. The key insight about purpose."
                },
                {
                    tamil: "அவர் ஏன் வரவில்லை என்று என்னால் புரிந்துகொள்ள முடியவில்லை.",
                    english: "I cannot understand why he did not come.",
                    grammar: "'cannot understand' = negative modal. 'why he did not come' = indirect question (noun clause) as object. No inversion in indirect questions.",
                    wordMeanings: [{
                        eng: "I cannot understand",
                        tam: "என்னால் புரிந்துகொள்ள முடியவில்லை"
                    }, {
                        eng: "why he did not come",
                        tam: "அவர் ஏன் வரவில்லை என்று"
                    }],
                    tamilMeaning: "அவர் ஏன் வரவில்லை என்று என்னால் புரிந்துகொள்ள முடியவில்லை.",
                    tips: "Indirect questions use statement word order: 'why he did not come' (not 'why did he not come')."
                },
                {
                    tamil: "நான் எவ்வளவு முயற்சி செய்தாலும் இந்த கணக்கு தீர்க்க முடியவில்லை.",
                    english: "No matter how much I try, I cannot solve this problem.",
                    grammar: "'No matter how much' = concessive expression. 'cannot solve' = negative modal ability. 'this problem' = specific problem.",
                    wordMeanings: [{
                        eng: "No matter how much I try",
                        tam: "எவ்வளவு முயற்சி செய்தாலும்"
                    }, {
                        eng: "I cannot solve",
                        tam: "தீர்க்க முடியவில்லை"
                    }, {
                        eng: "this problem",
                        tam: "இந்த கணக்கு"
                    }],
                    tamilMeaning: "எவ்வளவு முயற்சி செய்தாலும், இந்த பிரச்சனையை என்னால் தீர்க்க முடியவில்லை.",
                    tips: "Cannot/can't solve a problem. 'Solve' is for math/logical problems. 'Resolve' is for conflicts/disputes."
                },
                {
                    tamil: "நான் நினைத்தது போல் நடக்கவில்லை.",
                    english: "Things did not turn out the way I expected.",
                    grammar: "'did not turn out' = phrasal verb (past negative). 'the way I expected' = comparative clause functioning as adverb.",
                    wordMeanings: [{
                        eng: "Things did not turn out",
                        tam: "நடக்கவில்லை"
                    }, {
                        eng: "the way",
                        tam: "போல்"
                    }, {
                        eng: "I expected",
                        tam: "நான் நினைத்தது"
                    }],
                    tamilMeaning: "நான் எதிர்பார்த்தது போல் நடைபெறவில்லை.",
                    tips: "'Turn out' = to result, to happen in a certain way. It turned out well. It didn't turn out as planned."
                },
                {
                    tamil: "அவர் தொடர்ந்து உழைத்ததால் இறுதியில் வெற்றி பெற்றார்.",
                    english: "Because he persisted, he finally succeeded.",
                    grammar: "Causal clause: 'because he persisted' (reason). Main clause: 'he finally succeeded'. 'Finally' = adverb of time (after a long time).",
                    wordMeanings: [{
                        eng: "Because he persisted",
                        tam: "தொடர்ந்து உழைத்ததால்"
                    }, {
                        eng: "he finally succeeded",
                        tam: "இறுதியில் வெற்றி பெற்றார்"
                    }],
                    tamilMeaning: "அவர் தொடர்ந்து உழைத்ததால், இறுதியில் வெற்றி பெற்றார்.",
                    tips: "Because/since/as = reason clauses. 'Finally' = after a long time/at last. 'Eventually' is a close synonym."
                },
                {
                    tamil: "அவர் பேசத் தொடங்கியதும் அனைவரும் அமைதியடைந்தனர்.",
                    english: "The moment he began to speak, everyone fell silent.",
                    grammar: "'The moment + past clause' = as soon as. 'fell silent' = idiomatic expression for becoming quiet suddenly.",
                    wordMeanings: [{
                        eng: "The moment he began",
                        tam: "பேசத் தொடங்கியதும்"
                    }, {
                        eng: "to speak",
                        tam: "பேசத்"
                    }, {
                        eng: "everyone fell silent",
                        tam: "அனைவரும் அமைதியடைந்தனர்"
                    }],
                    tamilMeaning: "அவர் பேசத் தொடங்கியவுடன், அனைவரும் அமைதியாகி விட்டனர்.",
                    tips: "'Fall silent' = become quiet. 'Fall asleep' = start sleeping. 'Fall in love' = start loving. 'Fall' + adjective = change of state."
                },
                {
                    tamil: "அந்த திட்டம் மிகவும் சிக்கலானதால் அதை யாரும் விரும்பவில்லை.",
                    english: "Because the project was too complicated, nobody wanted to take it.",
                    grammar: "Causal clause + past tense. 'too + adjective' = excessively, beyond acceptable limit. 'take' as in accept/undertake.",
                    wordMeanings: [{
                        eng: "Because the project",
                        tam: "அந்த திட்டம்"
                    }, {
                        eng: "was too complicated",
                        tam: "மிகவும் சிக்கலானதால்"
                    }, {
                        eng: "nobody wanted to take it",
                        tam: "யாரும் விரும்பவில்லை"
                    }],
                    tamilMeaning: "திட்டம் மிகவும் சிக்கலானதால், அதை யாரும் ஏற்க விரும்பவில்லை.",
                    tips: "'Too + adjective' shows excess/problem: too complicated (so nobody wants it). Compare 'very complicated' (just description)."
                },
                {
                    tamil: "வெற்றி என்பது முயற்சியுடையவனுக்கே.",
                    english: "Success belongs only to those who make an effort.",
                    grammar: "'Success belongs to' + noun clause. 'those who' = relative pronoun clause. 'make an effort' = collocation.",
                    wordMeanings: [{
                        eng: "Success belongs",
                        tam: "வெற்றி சேர்கிறது"
                    }, {
                        eng: "only to those",
                        tam: "உடையவனுக்கே"
                    }, {
                        eng: "who make an effort",
                        tam: "முயற்சியுடையவர்களுக்கு"
                    }],
                    tamilMeaning: "வெற்றி முயற்சி செய்பவர்களுக்கே சொந்தம்.",
                    tips: "'Belong to' = be the property of / be appropriate for. 'Those who' = people who. Common in proverbs."
                },
                {
                    tamil: "அவர் கடந்த இருபது ஆண்டுகளாக இந்த துறையில் ஆராய்ச்சி செய்கிறார்.",
                    english: "He has been researching in this field for the past twenty years.",
                    grammar: "Present perfect continuous with 'for the past twenty years'. Emphasizes ongoing research from past to present.",
                    wordMeanings: [{
                        eng: "He has been researching",
                        tam: "ஆராய்ச்சி செய்கிறார்"
                    }, {
                        eng: "in this field",
                        tam: "இந்த துறையில்"
                    }, {
                        eng: "for the past twenty years",
                        tam: "கடந்த இருபது ஆண்டுகளாக"
                    }],
                    tamilMeaning: "அவர் கடந்த இருபது ஆண்டுகளாக இந்த துறையில் ஆராய்ச்சி செய்கிறார்.",
                    tips: "Present perfect continuous (have/has been + -ing) stresses the continuity and duration of the activity."
                },
                {
                    tamil: "நீங்கள் சொன்னது என்னை ஆழமாக பாதித்தது.",
                    english: "What you said affected me deeply.",
                    grammar: "'What you said' = nominal relative clause as subject. 'affected me deeply' = verb + object + adverb. affect→affected (regular).",
                    wordMeanings: [{
                        eng: "What you said",
                        tam: "நீங்கள் சொன்னது"
                    }, {
                        eng: "affected me",
                        tam: "என்னை பாதித்தது"
                    }, {
                        eng: "deeply",
                        tam: "ஆழமாக"
                    }],
                    tamilMeaning: "நீங்கள் சொன்னது என்னை ஆழமாக பாதித்தது.",
                    tips: "'What you said' = nominal clause = the thing(s) that you said. These clauses function as nouns in a sentence."
                },
                {
                    tamil: "அவர்கள் நல்ல காரணங்கள் இருந்தாலும் அதிகாரிகளை கேட்க துணிந்தார்கள்.",
                    english: "Even though they had good reasons, they dared to question the authorities.",
                    grammar: "Concessive: even though + past perfect. 'dared to' = past tense of 'dare'. 'question the authorities' = challenge those in power.",
                    wordMeanings: [{
                        eng: "Even though",
                        tam: "இருந்தாலும்"
                    }, {
                        eng: "they had good reasons",
                        tam: "நல்ல காரணங்கள் இருந்தாலும்"
                    }, {
                        eng: "they dared to question",
                        tam: "கேட்க துணிந்தார்கள்"
                    }, {
                        eng: "the authorities",
                        tam: "அதிகாரிகளை"
                    }],
                    tamilMeaning: "அவர்களிடம் நல்ல காரணங்கள் இருந்தாலும், அதிகாரிகளை கேள்வி கேட்கத் துணிந்தார்கள்.",
                    tips: "'Dare to' = have the courage to. 'Question' as a verb means to challenge, not just to ask."
                },
                {
                    tamil: "அவர் தனது பேச்சு மூலம் மக்களை ஈர்த்தார்.",
                    english: "He captivated the audience through his speech.",
                    grammar: "Simple past: captivate→captivated. 'through his speech' = prepositional phrase of means/method.",
                    wordMeanings: [{
                        eng: "He captivated",
                        tam: "ஈர்த்தார்"
                    }, {
                        eng: "the audience",
                        tam: "மக்களை"
                    }, {
                        eng: "through his speech",
                        tam: "தனது பேச்சு மூலம்"
                    }],
                    tamilMeaning: "அவர் தனது பேச்சு மூலம் பார்வையாளர்களை கவர்ந்தார்.",
                    tips: "Through = by means of. By, through, via, by means of — all show how/by what means an action was done."
                },
                {
                    tamil: "அவர் தடை செய்யப்பட்டிருந்தாலும் அந்த வழியில் நடந்தார்.",
                    english: "Even though he was forbidden, he walked that way.",
                    grammar: "Concessive clause (even though + past passive) + main clause (simple past). 'forbidden' = past participle as predicate adjective.",
                    wordMeanings: [{
                        eng: "Even though",
                        tam: "இருந்தாலும்"
                    }, {
                        eng: "he was forbidden",
                        tam: "தடை செய்யப்பட்டிருந்தாலும்"
                    }, {
                        eng: "he walked that way",
                        tam: "அந்த வழியில் நடந்தார்"
                    }],
                    tamilMeaning: "அவருக்கு தடை விதிக்கப்பட்டிருந்தாலும், அவர் அந்த வழியில் நடந்தார்.",
                    tips: "Passive adjectives: forbidden, allowed, permitted, required, expected — all past participles describing states."
                },
                {
                    tamil: "அவர் எந்த சூழலிலும் தன்னை இழக்காமல் இருப்பார்.",
                    english: "He will never lose himself in any situation.",
                    grammar: "Future negative: will never + base verb. 'in any situation' = prepositional phrase. 'lose himself' = reflexive pronoun.",
                    wordMeanings: [{
                        eng: "He will never lose",
                        tam: "இழக்காமல் இருப்பார்"
                    }, {
                        eng: "himself",
                        tam: "தன்னை"
                    }, {
                        eng: "in any situation",
                        tam: "எந்த சூழலிலும்"
                    }],
                    tamilMeaning: "அவர் எந்தச் சூழ்நிலையிலும் தன்னை இழந்துகொள்வதில்லை.",
                    tips: "Reflexive pronouns: myself, yourself, himself, herself, itself, ourselves, yourselves, themselves."
                },
                {
                    tamil: "ஒருமுறை தோல்வியடைந்தால் என்ன, மீண்டும் முயற்சி செய்க.",
                    english: "Even if you fail once, try again.",
                    grammar: "Concessive conditional: even if + present simple. Imperative 'try again' in main clause. 'once' = one time.",
                    wordMeanings: [{
                        eng: "Even if you fail",
                        tam: "தோல்வியடைந்தால் என்ன"
                    }, {
                        eng: "once",
                        tam: "ஒருமுறை"
                    }, {
                        eng: "try again",
                        tam: "மீண்டும் முயற்சி செய்க"
                    }],
                    tamilMeaning: "நீ ஒரு முறை தோல்வியடைந்தாலும், மீண்டும் முயற்சி செய்.",
                    tips: "'Even if' = regardless of whether or not. It assumes the condition might be true but says it doesn't matter."
                },
                {
                    tamil: "அவர் செய்த நல்லது எப்போதும் மறக்கப்படாது.",
                    english: "The good he did will never be forgotten.",
                    grammar: "Passive future: will never be + past participle 'forgotten'. Subject 'The good he did' = noun phrase with relative clause.",
                    wordMeanings: [{
                        eng: "The good he did",
                        tam: "அவர் செய்த நல்லது"
                    }, {
                        eng: "will never be forgotten",
                        tam: "மறக்கப்படாது"
                    }],
                    tamilMeaning: "அவர் செய்த நன்மை ஒருபோதும் மறக்கப்படாது.",
                    tips: "Future passive: will be + past participle. Will be remembered, will be done, will be announced."
                },
                {
                    tamil: "அவர்கள் மிகவும் சோர்வாக இருந்ததால் கூட்டத்தில் கலந்துகொள்ளவில்லை.",
                    english: "They were so tired that they did not attend the meeting.",
                    grammar: "'So + adjective + that' = result clause structure. 'so tired that' = cause + result. 'attend the meeting' = collocation.",
                    wordMeanings: [{
                        eng: "They were so tired",
                        tam: "மிகவும் சோர்வாக இருந்ததால்"
                    }, {
                        eng: "that they did not attend",
                        tam: "கலந்துகொள்ளவில்லை"
                    }, {
                        eng: "the meeting",
                        tam: "கூட்டத்தில்"
                    }],
                    tamilMeaning: "அவர்கள் மிகவும் சோர்வாக இருந்ததால் கூட்டத்தில் கலந்துகொள்ளவில்லை.",
                    tips: "'So + adj/adv + that' = result. 'Such + a/an + noun + that' = He was such a good speaker that everyone listened."
                },
                {
                    tamil: "நீ வெற்றி பெற வேண்டுமென்றால் தனிமையை அரவணைக்கக் கற்றுக்கொள்.",
                    english: "If you want to succeed, learn to embrace solitude.",
                    grammar: "First conditional with imperative in main clause. 'learn to' + infinitive. 'embrace solitude' = to accept/welcome being alone.",
                    wordMeanings: [{
                        eng: "If you want to succeed",
                        tam: "வெற்றி பெற வேண்டுமென்றால்"
                    }, {
                        eng: "learn to embrace",
                        tam: "அரவணைக்கக் கற்றுக்கொள்"
                    }, {
                        eng: "solitude",
                        tam: "தனிமையை"
                    }],
                    tamilMeaning: "நீ வெற்றிபெற விரும்பினால், தனிமையை ஏற்றுக்கொள்ளக் கற்றுக்கொள்.",
                    tips: "Conditional + imperative: If you want to improve, practice daily. The imperative gives advice as the consequence."
                },
                {
                    tamil: "அவர் எதை சாதிக்க விரும்பினார் என்று யாருக்கும் தெரியாது.",
                    english: "Nobody knows what he wanted to achieve.",
                    grammar: "'Nobody knows' + indirect question 'what he wanted to achieve'. Statement word order in indirect questions.",
                    wordMeanings: [{
                        eng: "Nobody knows",
                        tam: "யாருக்கும் தெரியாது"
                    }, {
                        eng: "what he wanted",
                        tam: "அவர் எதை விரும்பினார்"
                    }, {
                        eng: "to achieve",
                        tam: "சாதிக்க"
                    }],
                    tamilMeaning: "அவர் என்ன சாதிக்க விரும்பினார் என்று யாருக்கும் தெரியாது.",
                    tips: "Indirect question: Nobody knows what he wanted (NOT 'what did he want'). No inversion in embedded questions."
                },
                {
                    tamil: "அவர் மக்களால் மதிக்கப்படுவதற்கு காரணம் அவரது நேர்மையே.",
                    english: "The reason he is respected by people is his honesty.",
                    grammar: "'The reason ... is ...' = subject + copula + predicate. Passive 'is respected by people' embedded in noun clause.",
                    wordMeanings: [{
                        eng: "The reason",
                        tam: "காரணம்"
                    }, {
                        eng: "he is respected by people",
                        tam: "மக்களால் மதிக்கப்படுவதற்கு"
                    }, {
                        eng: "is his honesty",
                        tam: "அவரது நேர்மையே"
                    }],
                    tamilMeaning: "மக்களால் மதிக்கப்படுவதற்கான காரணம் அவரது நேர்மைதான்.",
                    tips: "'The reason (why)...' can introduce a clause. 'The reason...is' equates reason to cause."
                },
                {
                    tamil: "அவர்கள் மிகவும் கடுமையான நிலைமைகளில் வேலை செய்தும் யாரும் புகார் சொல்லவில்லை.",
                    english: "Even though they worked under very harsh conditions, nobody complained.",
                    grammar: "Concessive + simple past. 'under harsh conditions' = prepositional phrase of circumstance. 'complain' = intransitive verb.",
                    wordMeanings: [{
                        eng: "Even though they worked",
                        tam: "வேலை செய்தும்"
                    }, {
                        eng: "under very harsh conditions",
                        tam: "மிகவும் கடுமையான நிலைமைகளில்"
                    }, {
                        eng: "nobody complained",
                        tam: "யாரும் புகார் சொல்லவில்லை"
                    }],
                    tamilMeaning: "மிகவும் கடினமான சூழ்நிலைகளில் வேலை செய்தாலும், யாரும் புகார் சொல்லவில்லை.",
                    tips: "Complain about something: Nobody complained about the situation. Complain to someone: He complained to the manager."
                },
                {
                    tamil: "அவர் படித்ததை வாழ்க்கையில் பயன்படுத்தத் தெரியும்.",
                    english: "He knows how to apply what he has learned in life.",
                    grammar: "'knows how to' = understand the method. 'what he has learned' = noun clause (present perfect for accumulated knowledge).",
                    wordMeanings: [{
                        eng: "He knows how to apply",
                        tam: "பயன்படுத்தத் தெரியும்"
                    }, {
                        eng: "what he has learned",
                        tam: "படித்ததை"
                    }, {
                        eng: "in life",
                        tam: "வாழ்க்கையில்"
                    }],
                    tamilMeaning: "அவர் கற்றதை வாழ்வில் எவ்வாறு பயன்படுத்துவது என்று தெரியும்.",
                    tips: "'Know how to' = possess the skill/method. 'Able to' = have the capacity. 'Know how to swim' (method known)."
                },
                {
                    tamil: "நான் உன்னை நம்பியதால் நடந்தது இது.",
                    english: "This happened because I trusted you.",
                    grammar: "Causal clause: 'because I trusted you'. Simple past. 'This happened' = result clause in main position.",
                    wordMeanings: [{
                        eng: "This happened",
                        tam: "நடந்தது இது"
                    }, {
                        eng: "because",
                        tam: "ஏனென்றால்"
                    }, {
                        eng: "I trusted you",
                        tam: "நான் உன்னை நம்பியதால்"
                    }],
                    tamilMeaning: "நான் உன்னை நம்பியதால் இது நடந்தது.",
                    tips: "'Because' clause can come first (Because I trusted you, this happened) or second. No comma if clause is second."
                },
                {
                    tamil: "அவர் சாதிக்க வேண்டும் என்ற ஆர்வமே அவரை முன்னேற்றுகிறது.",
                    english: "The desire to achieve drives him forward.",
                    grammar: "Subject: 'The desire to achieve' (noun + infinitive). 'drives him forward' = verb + object + directional adverb.",
                    wordMeanings: [{
                        eng: "The desire",
                        tam: "ஆர்வம்"
                    }, {
                        eng: "to achieve",
                        tam: "சாதிக்க வேண்டும் என்ற"
                    }, {
                        eng: "drives him forward",
                        tam: "அவரை முன்னேற்றுகிறது"
                    }],
                    tamilMeaning: "சாதிக்க வேண்டும் என்ற ஆசையே அவரை முன்னோக்கி இட்டுச் செல்கிறது.",
                    tips: "'Drive' metaphorically = to motivate/push: What drives you? Ambition drives him. Passion drives her."
                },
                {
                    tamil: "கடுமையான உழைப்பு மட்டுமே இந்த பாதையில் வெற்றி தரும்.",
                    english: "Only hard work will bring success on this path.",
                    grammar: "'Only' at the beginning for emphasis. Future: will bring. 'success on this path' = noun + prepositional phrase.",
                    wordMeanings: [{
                        eng: "Only hard work",
                        tam: "கடுமையான உழைப்பு மட்டுமே"
                    }, {
                        eng: "will bring success",
                        tam: "வெற்றி தரும்"
                    }, {
                        eng: "on this path",
                        tam: "இந்த பாதையில்"
                    }],
                    tamilMeaning: "இந்த பாதையில் வெற்றி பெற கடுமையான உழைப்பு மட்டுமே உதவும்.",
                    tips: "Starting with 'Only + noun phrase' for emphasis (fronting). Formal and emphatic style in writing."
                },
                {
                    tamil: "நான் அவருடன் இருக்கும் ஒவ்வொரு தருணமும் மகிழ்ச்சி.",
                    english: "Every moment I spend with him is joyful.",
                    grammar: "'Every moment I spend with him' = noun phrase with relative clause as subject. 'joyful' = predicate adjective.",
                    wordMeanings: [{
                        eng: "Every moment",
                        tam: "ஒவ்வொரு தருணமும்"
                    }, {
                        eng: "I spend with him",
                        tam: "அவருடன் இருக்கும்"
                    }, {
                        eng: "is joyful",
                        tam: "மகிழ்ச்சி"
                    }],
                    tamilMeaning: "அவருடன் கழிக்கும் ஒவ்வொரு தருணமும் மகிழ்ச்சியானது.",
                    tips: "'Every + singular noun' takes a singular verb: Every moment is, every student was, every idea counts."
                },
                {
                    tamil: "அவர் நிறுவனத்தை வெற்றிகரமாக நடத்தி வருகிறார்.",
                    english: "He has been running the company successfully.",
                    grammar: "Present perfect continuous: has been + running. 'successfully' = adverb at end. run→running (double n).",
                    wordMeanings: [{
                        eng: "He has been running",
                        tam: "நடத்தி வருகிறார்"
                    }, {
                        eng: "the company",
                        tam: "நிறுவனத்தை"
                    }, {
                        eng: "successfully",
                        tam: "வெற்றிகரமாக"
                    }],
                    tamilMeaning: "அவர் நிறுவனத்தை வெற்றிகரமாக நடத்தி வருகிறார்.",
                    tips: "'Run a company/business' = manage. Run + -ning (double n). 'Manage', 'operate', 'lead' are formal synonyms."
                },
                {
                    tamil: "அவர் வெளிநாட்டில் பணிபுரிந்ததால் நிறைய அனுபவம் பெற்றார்.",
                    english: "Because he worked abroad, he gained a lot of experience.",
                    grammar: "Causal: because + past simple. Main clause: simple past + noun phrase. 'gain experience' = collocation.",
                    wordMeanings: [{
                        eng: "Because he worked abroad",
                        tam: "வெளிநாட்டில் பணிபுரிந்ததால்"
                    }, {
                        eng: "he gained",
                        tam: "பெற்றார்"
                    }, {
                        eng: "a lot of experience",
                        tam: "நிறைய அனுபவம்"
                    }],
                    tamilMeaning: "அவர் வெளிநாட்டில் பணிபுரிந்ததால், நிறைய அனுபவம் பெற்றார்.",
                    tips: "Gain experience / acquire skills / develop knowledge — these collocations describe professional growth."
                },
                {
                    tamil: "அவர் தவிர வேறு யாரும் இந்த இரகசியத்தை அறிய மாட்டார்கள்.",
                    english: "Nobody except him will know this secret.",
                    grammar: "'Nobody except him' = exclusive noun phrase as subject. Future: will know. 'this secret' = specific noun.",
                    wordMeanings: [{
                        eng: "Nobody except him",
                        tam: "அவர் தவிர வேறு யாரும்"
                    }, {
                        eng: "will know",
                        tam: "அறிய மாட்டார்கள்"
                    }, {
                        eng: "this secret",
                        tam: "இந்த இரகசியத்தை"
                    }],
                    tamilMeaning: "அவரைத் தவிர வேறு யாரும் இந்த ரகசியத்தை அறிய மாட்டார்கள்.",
                    tips: "'Except' / 'apart from' / 'other than' — used to exclude someone from a general statement."
                },
                {
                    tamil: "அவர்கள் ஒன்றிணைந்து செயல்படாவிட்டால் இந்த திட்டம் தோல்வியடையும்.",
                    english: "This project will fail if they do not act together.",
                    grammar: "First conditional (negative): will fail + if + do not act. 'act together' = work as a team.",
                    wordMeanings: [{
                        eng: "This project will fail",
                        tam: "திட்டம் தோல்வியடையும்"
                    }, {
                        eng: "if they do not act together",
                        tam: "ஒன்றிணைந்து செயல்படாவிட்டால்"
                    }],
                    tamilMeaning: "அவர்கள் ஒன்றாக செயல்படாவிட்டால், இந்த திட்டம் தோல்வியடையும்.",
                    tips: "'Act together' = collaborate. Synonyms: work as a team, cooperate, join forces."
                },
                {
                    tamil: "அவர் சொன்னதை நான் நம்பவே முடியவில்லை.",
                    english: "I simply cannot believe what he said.",
                    grammar: "'Simply' = adverb for emphasis (completely, absolutely). 'cannot believe' = negative modal. 'what he said' = noun clause.",
                    wordMeanings: [{
                        eng: "I simply cannot believe",
                        tam: "நான் நம்பவே முடியவில்லை"
                    }, {
                        eng: "what he said",
                        tam: "அவர் சொன்னதை"
                    }],
                    tamilMeaning: "அவர் சொன்னதை என்னால் நம்பவே முடியவில்லை.",
                    tips: "'Simply' as emphasis: I simply cannot, I simply don't understand. Intensifies the impossibility or denial."
                },
                {
                    tamil: "அவர் தொலைவில் இருந்தாலும் அவரது தாக்கம் உணரப்படுகிறது.",
                    english: "Even though he is far away, his influence is felt.",
                    grammar: "Concessive + passive present. 'influence is felt' = present passive (to be felt). Linking cause to continuing effect.",
                    wordMeanings: [{
                        eng: "Even though he is far away",
                        tam: "தொலைவில் இருந்தாலும்"
                    }, {
                        eng: "his influence",
                        tam: "அவரது தாக்கம்"
                    }, {
                        eng: "is felt",
                        tam: "உணரப்படுகிறது"
                    }],
                    tamilMeaning: "அவர் தொலைவில் இருந்தாலும், அவரது செல்வாக்கு உணரப்படுகிறது.",
                    tips: "Present passive for ongoing states: His influence is felt, His work is respected, His name is known."
                },
                {
                    tamil: "அவள் அளவற்ற திறமை கொண்டவளாக இருந்தாலும் வாய்ப்புகள் கிடைக்கவில்லை.",
                    english: "Although she is immensely talented, opportunities have not come her way.",
                    grammar: "Concessive clause + present perfect (have not come). 'immensely' = adverb intensifying 'talented'. 'come her way' = idiom.",
                    wordMeanings: [{
                        eng: "Although",
                        tam: "இருந்தாலும்"
                    }, {
                        eng: "she is immensely talented",
                        tam: "அளவற்ற திறமை கொண்டவள்"
                    }, {
                        eng: "opportunities have not come her way",
                        tam: "வாய்ப்புகள் கிடைக்கவில்லை"
                    }],
                    tamilMeaning: "அவள் மிகவும் திறமையானவளாக இருந்தாலும், வாய்ப்புகள் அவளுக்கு கிடைக்கவில்லை.",
                    tips: "'Come one's way' = happen to reach someone. If luck comes your way / when opportunities come your way."
                },
                {
                    tamil: "நான் தனிமையில் இருக்கும்போது என் மனதில் ஆயிரம் ஆலோசனைகள் தோன்றும்.",
                    english: "When I am alone, a thousand thoughts arise in my mind.",
                    grammar: "Time clause 'When I am alone' + main clause. 'a thousand thoughts' (plural) + 'arise' (plural verb). 'in my mind' = location.",
                    wordMeanings: [{
                        eng: "When I am alone",
                        tam: "தனிமையில் இருக்கும்போது"
                    }, {
                        eng: "a thousand thoughts",
                        tam: "ஆயிரம் ஆலோசனைகள்"
                    }, {
                        eng: "arise in my mind",
                        tam: "மனதில் தோன்றும்"
                    }],
                    tamilMeaning: "நான் தனியாக இருக்கும்போது, என் மனதில் ஆயிரம் எண்ணங்கள் எழுகின்றன.",
                    tips: "'Arise' = to appear, come up (thoughts, problems, situations). 'Rise' = to go up physically. Don't confuse them."
                },
                {
                    tamil: "அவர் தனது கடந்த காலத்திலிருந்து முன்னேறி வெற்றியடைந்தார்.",
                    english: "He moved beyond his past and achieved success.",
                    grammar: "Compound past: 'moved beyond' + 'achieved'. 'his past' = noun phrase. 'beyond' = preposition of transcendence.",
                    wordMeanings: [{
                        eng: "He moved beyond",
                        tam: "முன்னேறி"
                    }, {
                        eng: "his past",
                        tam: "தனது கடந்த காலத்திலிருந்து"
                    }, {
                        eng: "and achieved success",
                        tam: "வெற்றியடைந்தார்"
                    }],
                    tamilMeaning: "அவர் தனது கடந்த காலத்திை கடந்து வெற்றிபெற்றார்.",
                    tips: "'Move beyond' = transcend/overcome. 'Achieve success' = attain success. Both are formal collocations."
                },
                {
                    tamil: "நான் சொன்னதை நீ புரிந்துகொண்டிருந்தால் இப்படி நடந்திருக்காது.",
                    english: "If you had understood what I said, this would not have happened this way.",
                    grammar: "Third conditional: had understood + would not have happened. 'this way' = adverbial phrase of manner.",
                    wordMeanings: [{
                        eng: "If you had understood",
                        tam: "புரிந்துகொண்டிருந்தால்"
                    }, {
                        eng: "what I said",
                        tam: "நான் சொன்னதை"
                    }, {
                        eng: "this would not have happened",
                        tam: "இப்படி நடந்திருக்காது"
                    }],
                    tamilMeaning: "நான் சொன்னதை நீ புரிந்துகொண்டிருந்தால், இது இப்படி நடந்திருக்காது.",
                    tips: "Third conditional is for past regrets and missed opportunities. The action did NOT happen."
                },
                {
                    tamil: "அவர் எவ்வளவு துன்பம் அனுபவித்தாலும் நம்பிக்கை இழக்கவில்லை.",
                    english: "No matter how much suffering he endured, he never lost hope.",
                    grammar: "'No matter how much + noun + clause' = concessive. 'never lost hope' = negative past. 'endure' = to tolerate/bear.",
                    wordMeanings: [{
                        eng: "No matter how much suffering",
                        tam: "எவ்வளவு துன்பம் அனுபவித்தாலும்"
                    }, {
                        eng: "he endured",
                        tam: "அனுபவித்தாலும்"
                    }, {
                        eng: "he never lost hope",
                        tam: "நம்பிக்கை இழக்கவில்லை"
                    }],
                    tamilMeaning: "எவ்வளவு துன்பம் அனுபவித்தாலும், அவர் ஒருபோதும் நம்பிக்கை இழக்கவில்லை.",
                    tips: "'Lose hope' = become hopeless. 'Keep hope alive', 'hold on to hope', 'give up hope' — collocations with 'hope'."
                },
                {
                    tamil: "நல்ல அறிவுரை கொடுக்கக் கூடியவர்கள் மட்டுமே நல்ல நண்பர்கள் ஆவார்கள்.",
                    english: "Only those who can give good advice can be true friends.",
                    grammar: "Complex sentence: 'Only those who...' = restrictive relative clause. 'can be true friends' = modal in main clause.",
                    wordMeanings: [{
                        eng: "Only those who",
                        tam: "மட்டுமே"
                    }, {
                        eng: "can give good advice",
                        tam: "நல்ல அறிவுரை கொடுக்கக் கூடியவர்கள்"
                    }, {
                        eng: "can be true friends",
                        tam: "நல்ல நண்பர்கள் ஆவார்கள்"
                    }],
                    tamilMeaning: "நல்ல ஆலோசனை தர முடிந்தவர்கள் மட்டுமே உண்மையான நண்பர்களாக இருக்க முடியும்.",
                    tips: "'Only those who...' is a restrictive relative clause pattern used to define or limit a group."
                },
                {
                    tamil: "அவர் நீண்ட காலமாக கனவு கண்டதை இறுதியில் நிறைவேற்றினார்.",
                    english: "He finally achieved what he had been dreaming of for a long time.",
                    grammar: "Past perfect continuous 'had been dreaming' in relative clause. Simple past 'achieved' in main clause. 'of' at end (preposition stranding).",
                    wordMeanings: [{
                        eng: "He finally achieved",
                        tam: "இறுதியில் நிறைவேற்றினார்"
                    }, {
                        eng: "what he had been dreaming of",
                        tam: "கனவு கண்டதை"
                    }, {
                        eng: "for a long time",
                        tam: "நீண்ட காலமாக"
                    }],
                    tamilMeaning: "நீண்ட காலமாக கனவு கண்டதை அவர் இறுதியில் சாதித்தார்.",
                    tips: "Past perfect continuous in relative clause shows the dream was ongoing before the achievement moment."
                },
                {
                    tamil: "அவர் சொன்னது மட்டுமே என்னை தொடர்ந்து முயற்சிக்க தூண்டுகிறது.",
                    english: "Only what he said keeps motivating me to keep trying.",
                    grammar: "Noun clause 'what he said' as subject. 'keeps motivating' = present continuous emphasis on ongoing motivation.",
                    wordMeanings: [{
                        eng: "Only what he said",
                        tam: "அவர் சொன்னது மட்டுமே"
                    }, {
                        eng: "keeps motivating me",
                        tam: "தொடர்ந்து தூண்டுகிறது"
                    }, {
                        eng: "to keep trying",
                        tam: "முயற்சிக்க"
                    }],
                    tamilMeaning: "அவர் கூறியது மட்டுமே என்னை தொடர்ந்து முயற்சிக்கத் தூண்டுகிறது.",
                    tips: "'Keep + -ing' = continue doing: keeps motivating, keeps running, keeps improving — emphasizes continuation."
                },
                {
                    tamil: "எந்த சவாலும் அவரை சோர்வடையச் செய்யவில்லை.",
                    english: "No challenge has ever discouraged him.",
                    grammar: "Present perfect with 'ever' (in negative/question context). 'No challenge' = negative subject + singular verb.",
                    wordMeanings: [{
                        eng: "No challenge",
                        tam: "எந்த சவாலும்"
                    }, {
                        eng: "has ever discouraged",
                        tam: "சோர்வடையச் செய்யவில்லை"
                    }, {
                        eng: "him",
                        tam: "அவரை"
                    }],
                    tamilMeaning: "எந்தச் சவாலும் அவரை ஒருபோதும் மட்டுப்படுத்தியதில்லை.",
                    tips: "'No challenge has ever...' = not even one challenge has... 'Ever' with negatives = at any time."
                },
                {
                    tamil: "நான் முன்பு செய்த தவறுகளே என்னை இன்று ஞானமுடையவனாக்கியுள்ளன.",
                    english: "The mistakes I made in the past have made me wiser today.",
                    grammar: "'The mistakes I made in the past' = noun phrase with relative clause. 'have made' = present perfect causative. 'wiser' = comparative adjective.",
                    wordMeanings: [{
                        eng: "The mistakes I made",
                        tam: "நான் செய்த தவறுகளே"
                    }, {
                        eng: "in the past",
                        tam: "முன்பு"
                    }, {
                        eng: "have made me wiser",
                        tam: "ஞானமுடையவனாக்கியுள்ளன"
                    }, {
                        eng: "today",
                        tam: "இன்று"
                    }],
                    tamilMeaning: "கடந்த காலத்தில் நான் செய்த தவறுகளே என்னை இன்று அறிவாளியாக்கியுள்ளன.",
                    tips: "Causative 'make' + object + adjective: make me wiser, make him stronger, make her happier."
                },
            ]
        };

        /* ═══════════════════════════════════════════════════════════
           STATE
        ═══════════════════════════════════════════════════════════ */
        let state = {
            difficulty: 'easy',
            index: 0,
            score: 0,
            correct: 0,
            wrong: 0,
            attempted: 0,
            answered: [], // array of booleans (true=correct, false=wrong, null=not done)
            streak: 0,
            bestStreak: 0,
            timerSeconds: 60,
            timerInterval: null,
        };

        /* ═══════════════════════════════════════════════════════════
           INIT
        ═══════════════════════════════════════════════════════════ */
        function init() {
            state.answered = new Array(100).fill(null);
            loadQuestion();
            updateScoreboard();
            startTimer();
        }

        /* ═══════════════════════════════════════════════════════════
           DIFFICULTY
        ═══════════════════════════════════════════════════════════ */
        function selectDifficulty(diff, btn) {
            document.querySelectorAll('.diff-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            state.difficulty = diff;
            state.index = 0;
            state.answered = new Array(100).fill(null);
            document.getElementById('qsLevel').textContent = diff.charAt(0).toUpperCase() + diff.slice(1);
            loadQuestion();
            updateScoreboard();
        }

        /* ═══════════════════════════════════════════════════════════
           LOAD QUESTION
        ═══════════════════════════════════════════════════════════ */
        function loadQuestion() {
            const q = sentences[state.difficulty][state.index];
            document.getElementById('tamilSentence').textContent = q.tamil;
            document.getElementById('sentenceHint').innerHTML = `<i class="fa-regular fa-lightbulb me-1"></i>Type the English translation below`;
            const input = document.getElementById('answerInput');
            input.value = '';
            input.className = 'answer-input';
            input.disabled = false;

            const panel = document.getElementById('feedbackPanel');
            panel.classList.add('hidden');

            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane me-2"></i>Submit Answer';

            // if already answered, show feedback again
            if (state.answered[state.index] !== null) {
                input.value = '';
                input.disabled = true;
                submitBtn.disabled = true;
                showFeedback(false, state.answered[state.index]);
            }

            updateProgress();
            updateNavButtons();
            resetTimer();
        }

        /* ═══════════════════════════════════════════════════════════
           CHECK ANSWER
        ═══════════════════════════════════════════════════════════ */
        function checkAnswer() {
            if (state.answered[state.index] !== null) return;

            const q = sentences[state.difficulty][state.index];
            const raw = document.getElementById('answerInput').value.trim();
            if (!raw) {
                showToast('Please type your answer first!');
                return;
            }

            const normalize = s => s.toLowerCase().replace(/[^a-z0-9\s']/g, '').replace(/\s+/g, ' ').trim();
            const correct = normalize(raw) === normalize(q.english);

            state.answered[state.index] = correct;
            state.attempted++;
            document.getElementById('answerInput').disabled = true;
            document.getElementById('submitBtn').disabled = true;

            if (correct) {
                state.score++;
                state.correct++;
                state.streak++;
                state.bestStreak = Math.max(state.bestStreak, state.streak);
                document.getElementById('answerInput').className = 'answer-input correct';
                triggerConfetti();
                showToast('🎉 Correct! +1 point');
            } else {
                state.wrong++;
                state.streak = 0;
                document.getElementById('answerInput').className = 'answer-input wrong';
                showToast('❌ Incorrect. Check the explanation below.');
            }

            updateScoreboard();
            showFeedback(true, correct);
        }

        /* ═══════════════════════════════════════════════════════════
           FEEDBACK PANEL
        ═══════════════════════════════════════════════════════════ */
        function showFeedback(isNew, correct) {
            const q = sentences[state.difficulty][state.index];
            const panel = document.getElementById('feedbackPanel');

            if (correct) {
                panel.className = 'feedback-panel feedback-correct';
                panel.innerHTML = `
      <div class="feedback-header">
        <div class="feedback-icon">✅</div>
        <div>
          <div class="feedback-title">Excellent! Correct Answer</div>
          <div class="feedback-subtitle">Well done! You got it right.</div>
        </div>
      </div>
      <div class="feedback-body">
        <div class="correct-answer-box">
          <div class="label">Correct English</div>
          <div class="answer-text">${q.english}</div>
        </div>
        <div class="tip-box">
          <div class="tb-label"><i class="fa-solid fa-lightbulb"></i> Quick Tip</div>
          <div class="tb-content">${q.tips}</div>
        </div>
      </div>`;
            } else {
                const wordChips = q.wordMeanings.map(w =>
                    `<div class="word-chip"><span class="wc-eng">${w.eng}</span><span class="wc-tam">${w.tam}</span></div>`
                ).join('');

                panel.className = 'feedback-panel feedback-wrong';
                panel.innerHTML = `
      <div class="feedback-header">
        <div class="feedback-icon">❌</div>
        <div>
          <div class="feedback-title">Incorrect — Let's Learn!</div>
          <div class="feedback-subtitle">Here is the correct answer with a full explanation.</div>
        </div>
      </div>
      <div class="feedback-body">
        <div class="correct-answer-box">
          <div class="label">Correct English Sentence</div>
          <div class="answer-text">${q.english}</div>
        </div>
        <div class="info-grid">
          <div class="info-card full-grid">
            <div class="ic-label"><i class="fa-solid fa-book-open"></i> Grammar Explanation</div>
            <div class="ic-content">${q.grammar}</div>
          </div>
          <div class="info-card">
            <div class="ic-label"><i class="fa-solid fa-language"></i> Word Meanings</div>
            <div class="ic-content" style="display:flex;flex-wrap:wrap">${wordChips}</div>
          </div>
          <div class="info-card">
            <div class="ic-label"><i class="fa-solid fa-om"></i> Tamil Meaning</div>
            <div class="ic-content" style="font-family:'Noto Sans Tamil',sans-serif">${q.tamilMeaning}</div>
          </div>
        </div>
        <div class="tip-box">
          <div class="tb-label"><i class="fa-solid fa-lightbulb"></i> Tips to Remember</div>
          <div class="tb-content">${q.tips}</div>
        </div>
      </div>`;
            }

            panel.classList.remove('hidden');
        }

        /* ═══════════════════════════════════════════════════════════
           NAVIGATION
        ═══════════════════════════════════════════════════════════ */
        function navigate(dir) {
            const newIdx = state.index + dir;
            if (newIdx < 0 || newIdx >= 100) return;
            state.index = newIdx;
            loadQuestion();
        }

        function updateNavButtons() {
            document.getElementById('prevBtn').disabled = state.index === 0;
            document.getElementById('nextBtn').disabled = state.index === 99;
        }

        /* ═══════════════════════════════════════════════════════════
           PROGRESS
        ═══════════════════════════════════════════════════════════ */
        function updateProgress() {
            const answered = state.answered.filter(a => a !== null).length;
            const pct = Math.round((answered / 100) * 100);
            document.getElementById('progLabel').textContent = `Question ${state.index + 1} of 100`;
            document.getElementById('progPct').textContent = `${pct}% done`;
            document.getElementById('progBar').style.width = Math.max(1, pct) + '%';
        }

        /* ═══════════════════════════════════════════════════════════
           SCOREBOARD
        ═══════════════════════════════════════════════════════════ */
        function updateScoreboard() {
            document.getElementById('headerScore').textContent = state.score;
            document.getElementById('sbCorrect').textContent = state.correct;
            document.getElementById('sbWrong').textContent = state.wrong;
            document.getElementById('sbTotal').textContent = state.attempted;
            document.getElementById('streakCount').textContent = state.streak;
            document.getElementById('qsStreak').textContent = state.bestStreak;
            const acc = state.attempted > 0 ? Math.round((state.correct / state.attempted) * 100) + '%' : '—';
            document.getElementById('qsAcc').textContent = acc;

            const pct = state.attempted > 0 ? Math.round((state.correct / state.attempted) * 100) : 0;
            document.getElementById('scoreRing').style.setProperty('--pct', pct);
            document.getElementById('ringPct').textContent = pct + '%';
        }

        /* ═══════════════════════════════════════════════════════════
           TIMER
        ═══════════════════════════════════════════════════════════ */
        function startTimer() {
            clearInterval(state.timerInterval);
            state.timerSeconds = 60;
            updateTimerDisplay();
            state.timerInterval = setInterval(() => {
                state.timerSeconds--;
                updateTimerDisplay();
                if (state.timerSeconds <= 0) {
                    clearInterval(state.timerInterval);
                    if (state.answered[state.index] === null) {
                        showToast('⏰ Time is up!');
                        autoWrong();
                    }
                }
            }, 1000);
        }

        function resetTimer() {
            clearInterval(state.timerInterval);
            if (state.answered[state.index] === null) startTimer();
            else {
                state.timerSeconds = 0;
                updateTimerDisplay();
            }
        }

        function updateTimerDisplay() {
            const m = String(Math.floor(state.timerSeconds / 60)).padStart(2, '0');
            const s = String(state.timerSeconds % 60).padStart(2, '0');
            const el = document.getElementById('timerDisplay');
            const pill = document.getElementById('timerPill');
            el.textContent = `${m}:${s}`;
            pill.className = state.timerSeconds <= 10 ? 'timer-pill danger' : 'timer-pill';
        }

        function autoWrong() {
            if (state.answered[state.index] !== null) return;
            state.answered[state.index] = false;
            state.attempted++;
            state.wrong++;
            state.streak = 0;
            document.getElementById('answerInput').disabled = true;
            document.getElementById('submitBtn').disabled = true;
            document.getElementById('answerInput').className = 'answer-input wrong';
            updateScoreboard();
            showFeedback(true, false);
        }

        /* ═══════════════════════════════════════════════════════════
           RESET
        ═══════════════════════════════════════════════════════════ */
        function resetPractice() {
            if (!confirm('Reset all progress for this level? This cannot be undone.')) return;
            state.score = 0;
            state.correct = 0;
            state.wrong = 0;
            state.attempted = 0;
            state.streak = 0;
            state.bestStreak = 0;
            state.index = 0;
            state.answered = new Array(100).fill(null);
            updateScoreboard();
            loadQuestion();
            showToast('Practice reset! Start fresh 🚀');
        }

        /* ═══════════════════════════════════════════════════════════
           CONFETTI
        ═══════════════════════════════════════════════════════════ */
        function triggerConfetti() {
            const box = document.getElementById('confettiBox');
            const colours = ['#4f46e5', '#7c3aed', '#f43f5e', '#f59e0b', '#10b981', '#c4b5fd', '#a5f3fc'];
            for (let i = 0; i < 60; i++) {
                const el = document.createElement('div');
                el.className = 'confetti-piece';
                el.style.left = Math.random() * 100 + 'vw';
                el.style.animationDelay = Math.random() * 0.8 + 's';
                el.style.animationDuration = (1.2 + Math.random() * 1) + 's';
                el.style.background = colours[Math.floor(Math.random() * colours.length)];
                el.style.transform = `rotate(${Math.random()*360}deg)`;
                el.style.width = el.style.height = (8 + Math.random() * 8) + 'px';
                el.style.borderRadius = Math.random() > 0.5 ? '50%' : '2px';
                box.appendChild(el);
                setTimeout(() => el.remove(), 2500);
            }
        }

        /* ═══════════════════════════════════════════════════════════
           TOAST
        ═══════════════════════════════════════════════════════════ */
        let toastTimeout;

        function showToast(msg) {
            clearTimeout(toastTimeout);
            const wrap = document.getElementById('toastWrap');
            document.getElementById('toastMsg').textContent = msg;
            wrap.classList.remove('hidden');
            toastTimeout = setTimeout(() => wrap.classList.add('hidden'), 2700);
        }

        /* ═══════════════════════════════════════════════════════════
           KEYBOARD SHORTCUT — Enter to submit
        ═══════════════════════════════════════════════════════════ */
        document.getElementById('answerInput').addEventListener('keydown', e => {
            if (e.key === 'Enter' && e.ctrlKey) checkAnswer();
        });

        /* ─── BOOT ─── */
        init();
    </script>
    
</body>

</html>
