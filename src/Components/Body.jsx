import React from "react";

const Body = () => {
  return (
    <div className="mt-1">
      <section>
        <div className="relative bg-[url('/src/assets/bi.png')] h-[350px] p-32 text-center bg-cover bg-center bg-no-repeat text-white">
          <div className="absolute inset-0 bg-black opacity-50"></div>
          <div className="mt-[-10px] relative z-10">
            <h1 className="font-bold text-3xl">
              Affordable Professional Websites
            </h1>
            <p className="break-words text-gray-100  max-w-full">
              Once you pick an album on the list, you will be able to see
              highlighted stories from that album. Finish the download process
              simply by clicking the link below the story.
            </p>
          </div>
        </div>
      </section>

      <section>
        <div  className="bg-gray-700 h-16 items-center flex justify-around">
          <h1 className="text-md font-bold text-white">Subscribe To Our Newsletter</h1>
          <form className="space-x-1">
            <input type="email" className="h-6 w-[200px] text-gray-700" placeholder="Enter Email..." />
            <button className="bg-customRed text-white text-center w-16 h-6" type="submit">Submit</button>
          </form>
        </div>
      </section>

    
      <section>
  <div className="bg-gray-100 h-auto p-4 flex flex-col justify-center md:flex-row gap-4">
    <div className="flex flex-col items-center  text-center w-full md:w-1/3">
      <img
        src="/src/assets/hml.png"
        alt="HTML Markup"
        className="mb-2 w-34 h-36 object-cover" 
      />
      <h3 className="font-bold text-md md:text-xl">HTML5 Markup</h3>
      <p className="break-words max-w-full text-sm md:text-sm">
      HTML is the standard markup language for Web pages. With HTML you can create your own Website.
      </p>
    </div>
    <div className="flex flex-col items-center justify-center text-center w-full md:w-1/3">
      <img
        src="/src/assets/cssi.png"
        alt="CSS Markup"
        className="mb-2 w-44 h-36 object-cover" 
      />
      <h3 className="font-bold text-md md:text-xl">CSS3 Markup</h3>
      <p className="break-words max-w-full text-sm md:text-sm">
      CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed.
      </p>
    </div>
    <div className="flex flex-col items-center justify-center text-center w-full md:w-1/3">
      <img
        src="/src/assets/gd.png"
        alt="Graphics Design"
        className="mb-2 w-44 h-36 object-cover" // Ensure image scales correctly
      />
      <h3 className="font-bold text-md md:text-xl">Graphics Design</h3>
      <p className="break-words max-w-full text-sm md:text-sm">
      Graphic design is a craft where professionals create visual content to communicate messages
      </p>
    </div>
  </div>
</section>




    </div>
  );
};

export default Body;
