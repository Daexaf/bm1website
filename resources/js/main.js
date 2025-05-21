document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);
        let loading = document.querySelector(".loading");
        let successMsg = document.querySelector(".sent-message");
        let errorMsg = document.querySelector(".error-message");
        let submitBtn = document.getElementById("submitBtn");

        // Tampilkan efek loading & sembunyikan tombol submit sementara
        loading.classList.remove("d-none");
        submitBtn.classList.add("d-none");
        successMsg.classList.add("d-none");
        errorMsg.classList.add("d-none");

        fetch("{{ route('send.email') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector("input[name='_token']").value,
            },
        })
        .then(response => response.json())
        .then(data => {
            loading.classList.add("d-none");

            if (data.success) {
                successMsg.textContent = data.message;
                successMsg.classList.remove("d-none");

                // Kosongkan form setelah berhasil
                form.reset();

                // Hapus tombol submit setelah sukses
                submitBtn.remove();
            } else {
                errorMsg.textContent = data.message;
                errorMsg.classList.remove("d-none");
                submitBtn.classList.remove("d-none");
            }
        })
        .catch(error => {
            loading.classList.add("d-none");
            errorMsg.textContent = "An error occurred. Please try again.";
            errorMsg.classList.remove("d-none");
            submitBtn.classList.remove("d-none");
        });
    });
});
