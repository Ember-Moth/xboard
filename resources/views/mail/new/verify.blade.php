<div style="background: linear-gradient(145deg, #f6f8fb 0%, #f0f3f7 100%); padding: 40px 20px;">
    <div style="max-width: 580px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(32, 43, 54, 0.08);">
        <!-- Logo区域 -->
        <div style="padding: 35px 40px; text-align: center; border-bottom: 1px solid #f1f3f5;">
            <h1 style="margin: 0; font-size: 22px; color: #2c3345; font-weight: 600; letter-spacing: -0.5px;">{{$name}}</h1>
        </div>
        
        <!-- 内容区 -->
        <div style="padding: 40px;">
            <div style="text-align: center; margin-bottom: 35px;">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" style="margin: 0 auto;">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2c3345" stroke-width="1.5"/>
                    <path d="M12 6V12L16 14" stroke="#2c3345" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h2 style="margin: 20px 0 0; font-size: 20px; color: #2c3345; font-weight: 600;">验证码</h2>
            </div>

            <div style="margin: 35px 0; text-align: center;">
                <div style="display: inline-block; padding: 24px 40px; background: linear-gradient(145deg, #f9fafb 0%, #f5f7f9 100%); border: 1px solid #e9ecef; border-radius: 12px;">
                    <span style="font-family: 'SF Mono', SFMono-Regular, Menlo, Monaco, Consolas, monospace; font-size: 32px; font-weight: 500; letter-spacing: 8px; color: #2c3345;">{{$code}}</span>
                </div>
            </div>
            
            <div style="margin: 40px 0 0; padding-top: 24px; border-top: 1px dashed #e9ecef;">
                <p style="margin: 0; font-size: 13px; color: #8792a2; line-height: 1.6; text-align: center;">
                    验证码有效期为 5 分钟，如非本人操作请忽略。
                </p>
            </div>
        </div>
        
        <!-- 底部 -->
        <div style="padding: 20px; background-color: #f9fafb; text-align: center;">
            <p style="margin: 0; font-size: 13px; color: #8792a2;">
                安全邮件提醒 · {{$name}}
            </p>
        </div>
    </div>
</div> 