using Microsoft.AspNetCore.Mvc;
using quiz1.Models;
using System.Diagnostics;

namespace quiz1.Controllers
{
    public class q1Controller : Controller
    {
        private readonly ILogger<q1Controller> _logger;

        public q1Controller(ILogger<q1Controller> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            return View();
        }
        public IActionResult Profile()
        {
            return View();
        }
        public IActionResult Company()
        {
            return View();
        }
        public IActionResult Menu()
        {
            return View();
        }
        public IActionResult Proposal()
        {
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}