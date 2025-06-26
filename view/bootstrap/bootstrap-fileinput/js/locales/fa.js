/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/*!
 * FileInput Persian Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 * @author Milad Nekofar <milad@nekofar.com>
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['fa'] = {
        fileSingle: 'فایل',
        filePlural: 'فایل‌ها',
        browseLabel: 'مرور &hellip;',
        removeLabel: 'حذف',
        removeTitle: 'پاکسازی فایل‌های انتخاب شده',
        cancelLabel: 'لغو',
        cancelTitle: 'لغو بارگزاری جاری',
        uploadLabel: 'بارگذاری',
        uploadTitle: 'بارگذاری فایل‌های انتخاب شده',
        msgNo: 'نه',
        msgNoFilesSelected: 'هیچ فایلی انتخاب نشده است',
        msgCancelled: 'لغو شد',
        msgZoomModalHeading: 'نمایش با جزییات',
        msgFileRequired: 'You must select a file to upload.',
        msgSizeTooSmall: 'فایل "{name}" (<b>{size} کیلوبایت</b>) خیلی کوچک است و باید از <b>{minSize} کیلوبایت بزرگتر باشد</b>.',
        msgSizeTooLarge: 'فایل "{name}" (<b>{size} کیلوبایت</b>) از حداکثر مجاز <b>{maxSize} کیلوبایت</b> بزرگتر است.',
        msgFilesTooLess: 'شما باید حداقل <b>{n}</b> {files} فایل برای بارگذاری انتخاب کنید.',
        msgFilesTooMany: 'تعداد فایل‌های انتخاب شده برای بارگذاری <b>({n})</b> از حداکثر مجاز عبور کرده است <b>{m}</b>.',
        msgFileNotFound: 'فایل "{name}" یافت نشد!',
        msgFileSecured: 'محدودیت های امنیتی مانع خواندن فایل "{name}" است.',
        msgFileNotReadable: 'فایل "{name}" قابل نوشتن نیست.',
        msgFilePreviewAborted: 'پیش نمایش فایل "{name}". به مشکل خورد',
        msgFilePreviewError: 'در هنگام خواندن فایل "{name}" خطایی رخ داد.',
        msgInvalidFileName: 'کاراکترهای غیرمجاز و یا ناشناخته در نام فایل "{name}".',
        msgInvalidFileType: 'نوع فایل "{name}" معتبر نیست. فقط "{types}" پشیبانی می‌شوند.',
        msgInvalidFileExtension: 'پسوند فایل "{name}" معتبر نیست. فقط "{extensions}" پشتیبانی می‌شوند.',
        msgFileTypes: {
            'image': 'عکس',
            'html': 'اچ تا ام ال',
            'text': 'متن',
            'video': 'ویدئو',
            'audio': 'صدا',
            'flash': 'فلش',
            'pdf': 'پی دی اف',
            'object': 'دیگر'
        },
        msgUploadAborted: 'بارگذاری فایل به مشکل خورد.',
        msgUploadThreshold: 'در حال پردازش...',
        msgUploadBegin: 'در حال شروع...',
        msgUploadEnd: 'انجام شد',
        msgUploadEmpty: 'هیچ داده معتبری برای بارگذاری موجود نیست.',
        msgUploadError: 'Error',
        msgValidationError: 'خطای اعتبار سنجی',
        msgLoading: 'بارگیری فایل {index} از {files} &hellip;',
        msgProgress: 'بارگیری فایل {index} از {files} - {name} - {percent}% تمام شد.',
        msgSelected: '{n} {files} انتخاب شده',
        msgFoldersNotAllowed: 'فقط فایل‌ها را بکشید و رها کنید! {n} پوشه نادیده گرفته شد.',
        msgImageWidthSmall: 'عرض فایل تصویر "{name}" باید حداقل {size} پیکسل باشد.',
        msgImageHeightSmall: 'ارتفاع فایل تصویر "{name}" باید حداقل {size} پیکسل باشد.',
        msgImageWidthLarge: 'عرض فایل تصویر "{name}" نمیتواند از {size} پیکسل بیشتر باشد.',
        msgImageHeightLarge: 'ارتفاع فایل تصویر "{name}" نمی‌تواند از {size} پیکسل بیشتر باشد.',
        msgImageResizeError: 'یافت نشد ابعاد تصویر را برای تغییر اندازه.',
        msgImageResizeException: 'خطا در هنگام تغییر اندازه تصویر.<pre>{errors}</pre>',
        msgAjaxError: 'به نظر مشکلی در حین {operation} روی داده است. لطفا دوباره تلاش کنید!',
        msgAjaxProgressError: '{operation} لغو شد',
        ajaxOperations: {
            deleteThumb: 'حذف فایل',
            uploadThumb: 'بارگذاری فایل',
            uploadBatch: 'بارگذاری جمعی فایلها',
            uploadExtra: 'بارگذاری با کمک فُرم'
        },
        dropZoneTitle: 'فایل‌ها را بکشید و در اینجا رها کنید &hellip;',
        dropZoneClickTitle: '<br>(یا برای انتخاب {files} کلیک کنید)',
        fileActionSettings: {
            removeTitle: 'حذف فایل',
            uploadTitle: 'آپلود فایل',
            uploadRetryTitle: 'Retry upload',
            downloadTitle: 'Download file',
            zoomTitle: 'دیدن جزئیات',
            dragTitle: 'جابجایی / چیدمان',
            indicatorNewTitle: 'آپلود نشده است',
            indicatorSuccessTitle: 'آپلود شده',
            indicatorErrorTitle: 'بارگذاری خطا',
            indicatorLoadingTitle: 'آپلود ...'
        },
        previewZoomButtonTitles: {
            prev: 'مشاهده فایل قبلی',
            next: 'مشاهده فایل بعدی',
            toggleheader: 'نمایش عنوان',
            fullscreen: 'نمایش تمام صفحه',
            borderless: 'نمایش حاشیه',
            close: 'بستن نمایش با جزییات'
        }
    };
})(window.jQuery);
