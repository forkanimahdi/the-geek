<x-app-layout>
    <div class="overflow-hidden bg-gradient-to-bl w-full h-screen flex justify-center items-center">
        <img class="w-[3%] absolute left-50 top-6" src={{ asset('images/logo1.png') }} alt="">
        <div
            class="relative shadow-lg bg-gradient-to-t from-[#80b918] to-[#007f5f] z-10 rounded w-[70%] py-8 flex items-center flex-col gap-2">
            <img class="absolute -z-10 top-0 right-50 opacity-10 w-[100%]" src={{ asset('images/3215422.png') }}
                alt="">

            <p class="text-white text-lg">Question <span id="number" class="font-medium">1</span> /<span
                    id="all">20</span> </p>

            <div class="w-[100%] p-2 flex justify-center  text-2xl font-medium text-white">
                <h1 id="question" class="text-center px-8">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h1>
            </div>

            <div id="answers" class="flex flex-wrap w-full items-center justify-center gap-x-8 gap-y-3 text-white">
                {{-- <div class="p-2 w-[50vw]">
                    a <input type="text" placeholder="Type your answer here"
                        class="outline-none w-full border-none text-black font-mono font-bold rounded">
                </div> --}}
            </div>
        </div>
    </div>

    <div class="hidden">
        <form id="scoreform" action="{{ route('scores') }}" method="POST">
            @csrf
            <input type="hidden" name="score" id="score">
        </form>
    </div>
</x-app-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const questions = [{
                question: "La7ya wants to create a website. Which HTML element is used to define the main content of a web page?",
                options: ["head", "body", "div", "section"],
                correctAnswer: "body",
            },
            {
                question: "La7ya wants to add a hyperlink to her page. Which attribute is used to specify the URL destination in an <a> tag?",
                options: ["src", "link", "href", "url"],
                correctAnswer: "href",
            },
            {
                question: "La7ya wants to display an image on her site. Which HTML tag should she use?",
                options: ["image", "img", "pic", "figure"],
                correctAnswer: "img",
            },
            {
                question: "La7ya wants to organize the content of her page using logical sections. Which HTML tag should she use?",
                options: ["div", "span", "section", "article"],
                correctAnswer: "section",
            },
            {
                question: "La7ya wants to add an unordered list to her page. Which HTML tag should she use to create the list?",
                options: ["ul", "ol", "li", "list"],
                correctAnswer: "ul",
            },
            {
                question: "La7ya wants to add an unordered list to her page. Which HTML tag should she use to create the list?",
                options: ["ul", "ol", "li", "list"],
                correctAnswer: "ul",
            },
            {
                question: "Using the &lt;h1&gt; tag means you want the title to appear larger than if you used the &lt;h6&gt; tag:",
                options: ["true", "false"],
                correctAnswer: "true",
            },
            {
                question: "La7ya wants to add a video. Which HTML tag should she use?",
                options: ["link", "script", "source", "iframe"],
                correctAnswer: "iframe",
            },
            {
                question: "La7ya wants to change the text color of her website's headings. Which CSS property should she use?",
                options: ["font-color", "text-color", "color", "background-color"],
                correctAnswer: "color",
            },
            {
                question: "La7ya wants to center an element in the middle of the page. Which CSS rule is correct for centering a block element horizontally?",
                options: [
                    "text-align: center;",
                    "margin: auto",
                    "align-items: center",
                    "justify-content: center",
                ],
                correctAnswer: "margin: auto",
            },
            {
                question: "La7ya wants to add space inside the elements on her site. Which CSS property should she use?",
                options: ["margin", "spacing", "padding", "border"],
                correctAnswer: "padding",
            },
            {
                question: "La7ya wants to apply the same style to multiple HTML elements. Which CSS selector should she use?",
                options: [
                    "Class selector (.className)",
                    " ID selector (#idName)",
                    "Tag selector (tagName)",
                    "Universal selector (*)",
                ],
                correctAnswer: "Class selector (.className)",
            },
            {
                question: "La7ya wants to clip an image into a circular shape. Which CSS property should she use?",
                options: [
                    "border-radius: 50%",
                    "clip-path: circle()",
                    "mask-image: circle()",
                    "shape-outside: circle()",
                ],
                correctAnswer: "border-radius: 50%",
            },
            {
                question: `const number = 12;
            function myFunction(a) {
                console.log(a);
            }
            myFunction(number*2)`,
                options: [
                    "2",
                    "12",
                    "24",
                    "1",
                ],
                correctAnswer: "24",
            },
            {
                question: `let b = 1;
            function myFunction(a) {
                console.log(a + b);
                b = a;
            }
            myFunction(3);
            myFunction(4);`,
                options: [
                    "4,7",
                    "4,3",
                    "3,7",
                    "3,4",
                ],
                correctAnswer: "4,7",
            },
            {
                question: `What will "5" + 3 return?`,
                options: [
                    `"53"`,
                    "53",
                    "8",
                    "35",
                ],
                correctAnswer: `"53"`,
            },
            {
                question: `What will [2] == [2] return and why?`,
                options: [
                    `true`,
                    "false",
                ],
                correctAnswer: `false`,
            },
            {
                question: `With MySQL, how do you select all the columns from a table named "Persons"?`,
                options: [
                    "SELECT Persons ",
                    "SELECT * FROM Persons",
                    "Select * From Persons",
                    "SELECT [all]  FROM Persons",
                ],
                correctAnswer: "SELECT * FROM Persons",
            },
            {
                question: `How can I combine data from two separate tables in SQL to create a single result set?`,
                options: [
                    "SELECT Persons ",
                    "SELECT * FROM Persons",
                    "Select * From Persons",
                    "SELECT [all]  FROM Persons",
                ],
                correctAnswer: "SELECT * FROM Persons",
            },
            {
                question: `How can I combine data from two separate tables in SQL to create a single result set?`,
                options: [
                    "Join",
                    "Combine",
                    "merge",
                    "integrate",
                ],
                correctAnswer: "Join",
            },
            {
                question: `Which MySQL statement is used to return only different values?`,
                options: [
                    "SELECT DISTINCT",
                    "SELECT UNIQUE",
                    "SELECT DIFFERENT",
                    "SELECT INDIVIDUAL",
                ],
                correctAnswer: "SELECT UNIQUE",
            },
            {
                question: `Which MySQL keyword is used to sort the result-set?`,
                options: [
                    "ORDER BY",
                    "SORT BY",
                    "SORT",
                    "ORDER",
                ],
                correctAnswer: "ORDER BY",
            },
            {
                question: `Array = [8, [92, [115, 35], 15], 67]
            what is the index of the number 15`,
                options: [
                    "2",
                    "3,4",
                    "1,2",
                    "2,3",
                ],
                correctAnswer: "3,4",
            },
            {
                question: `how to copy the content of a directory to another directory`,
                options: [
                    "cp -r",
                    "cp -t",
                    "cp",
                    "copy",
                ],
                correctAnswer: "cp -r",
            },
            {
                question: `how to show all hidden files in bash`,
                options: [
                    "ls",
                    "ls -A",
                    "ls -a",
                    "ls -al",
                ],
                correctAnswer: "ls -a",
            },
            {
                question: `how to rename a file or directory in bash`,
                options: [
                    "mv",
                    "rename",
                    "move",
                    "mv -pm",
                ],
                correctAnswer: "mv",
            },
            {
                question: `Multiply the binary numbers 110 and 101.`,
                options: [
                    "30",
                    "16",
                    "11010",
                    "7",
                ],
                correctAnswer: "30",
            },
            {
                question: `finnaly you are in the last question and it's a little bit difficult you need to help la7ya to incript this code "YvbafTRRXkOGF"`,
                options: [
                    "LionsGEEKxBTS",
                    "BTSandLIONSGEEK",
                    "LIONSGEEKANDBTS",
                    "LionsGeekandBTS",
                ],
                correctAnswer: "LionsGEEKxBTS",
            },
        ];

        let correct = 0;

        const play = (index) => {
            if (index == questions.length) {
                console.log("done", Math.trunc((correct / questions.length) * 100));
                console.log(score)
                score.value = Math.trunc((correct / questions.length) * 100)
                scoreform.submit();
                return;
            }

            const Q = questions[index];
            number.innerText = index + 1;
            question.innerText = Q.question;

            let content = "";
            Q.options.forEach((A, I) => {
                content += `
            <div data-answer="${A}"
                    class="option group bg-white w-[40%] h-[7vh] rounded flex gap-5 items-center px-3 hover:bg-gray-700/50 cursor-pointer">
                    <div class="border size-10 rounded-full text-black group-hover:text-white flex justify-center items-center">
                        ${I + 1}.
                    </div>
                    <p class="group-hover:text-white text-black">${A}</p>
                </div>
                `;
            });

            answers.innerHTML = content;

            this.querySelectorAll(".option").forEach((O) => {
                O.addEventListener("click", function() {
                    if (this.dataset.answer == Q.correctAnswer) {
                        correct++;
                    }

                    return play(index + 1);
                });
            });
        };

        all.innerText = questions.length;
        play(0);
    });
</script>
